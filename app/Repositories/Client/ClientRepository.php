<?php namespace App\Repositories\Client;

use App\Models\Client;
use App\Models\ClientFile;
use App\Models\ClientMessage;
use App\Models\ClientMessageArgument;
use App\Models\ClientRules;
use App\Models\Property;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{
    protected $model;
    protected $client_rules;
    protected $client_files;

    public function __construct(Client $model, ClientRules $client_rules, ClientFile $client_files)
    {
        parent::__construct($model);
        $this->client_rules = $client_rules;
        $this->client_files = $client_files;
    }

    public function getDataTable(){
        $list = $this->model->latest()->get();
        return Datatables::of($list)
            ->addColumn('actions', function ($row) {
                return view('admin.crm.client.actions', ['row' => $row]);
            })
            ->editColumn('created_at', function ($row){
                return $row->created_at->diffForHumans();
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function getUserRodo($client, $attributes = null): object
    {
        return $this->client_rules->where('client_id', $client->id)
            ->when(isset($attributes['status']), function($query) use ($attributes) {
                $query->where('status', $attributes['status']);
            })
            ->get();
    }

    public function getUserFiles($client): object
    {
        return $this->client_files->where('client_id', $client->id)
            ->when($user_id = auth()->id(), function($query) use ($user_id) {
                $query->where("user_id", $user_id);
            })
            ->get(['id', 'user_id', 'name', 'description', 'file', 'mime', 'size', 'created_at', 'updated_at']);
    }

    public function createClient($attributes, $property = null, $status = 1)
    {
        Log::info('Call createClient');

        if (isset($attributes['cookie']) && is_array($attributes['cookie'])) {
            $utm_array = array_filter($attributes->cookie());
            unset($utm_array['XSRF-TOKEN'], $utm_array['laravel_session']);
        }

        Log::info('Request: ' . $attributes['form_email']);
        Log::info('Request: ' . $attributes['form_phone']);
        Log::info('Request: ' . $attributes['form_name']);
        Log::info('Request: ' . $status);

        try {
            // Additional logging before updateOrCreate
            Log::info('Attempting to updateOrCreate client');

//            $client = $this->model->updateOrCreate(
//                ['mail' => $attributes['email']],
//                [
//                    'phone' => $attributes['phone'] ?? NULL,
//                    'name' => $attributes['name'],
//                    'status' => $status,
//                    'updated_at' => now()
//                ]
//            );

            // Find the record by email or create a new instance
            $client = $this->model->firstOrNew(['mail' => $attributes['form_email']]);

// Check if the client already exists
            if ($client->exists) {
                // Client exists, update attributes
                $client->phone = $attributes['form_phone'] ?? null;
                $client->name = $attributes['form_name'];
                $client->status = $status;
                $client->updated_at = now();

                // Save and trigger the 'updated' event
                $client->save();
            } else {
                // Client does not exist, set attributes
                $client->phone = $attributes['form_phone'] ?? null;
                $client->name = $attributes['form_name'];
                $client->status = $status;
                $client->created_at = now(); // Optional: set created_at manually if needed
                $client->updated_at = now();

                // Save and trigger the 'created' event
                $client->save();
            }

            if ($client->wasRecentlyCreated) {
                Log::info('Client was created: ' . $client->id);
            } else {
                Log::info('Client was updated: ' . $client->id);
            }

        } catch (\Exception $e) {
            Log::error('Error during updateOrCreate: ' . $e->getMessage());
        }

        if(isset($attributes['form_message']) && $client->id){

            //$source = strtok($attributes->headers->get('referer'), '?');

            $msg = ClientMessage::create([
                'client_id' => $client->id,
                'message' => $attributes['form_message'],
                'ip' => $attributes->ip(),
                'source' => $attributes['form_page'],
            ]);

            if ($property) {
                $propertyMappings = [
                    'investment_id' => $property->investment_id,
                    'building_id' => $property->building_id,
                    'floor_id' => $property->floor_id,
                    'property_id' => $property->id,
                    'rooms' => $property->rooms,
                    'area' => $property->area,
                ];

                $arguments = array_merge($propertyMappings, $utm_array);
                $jsonArguments = json_encode($arguments);
                $msg->arguments = $jsonArguments;
            }

            $msg->save();
        }

        return $client;
    }
}
