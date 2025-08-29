<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

use App\Mail\ChatSend;
use App\Mail\VoxContactMail;
use App\Models\Inline;
use App\Models\Page;
use App\Models\RodoRules;
use App\Repositories\Client\ClientRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use App\Models\Property;
use App\Models\Recipient;

use App\Notifications\ContactNotification;
use App\Notifications\PropertyNotification;
use Cookie;

class ContactController extends Controller
{
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    function index(){
        $page = Page::find(5);
        return view('front.contact.index', [
            'page' => $page
        ]);
    }

    function property(ContactFormRequest $request, $id)
    {
        try {
            $property = Property::find($id);

            $client = $this->repository->createClient($request, $property);

            $property->notify(new PropertyNotification($request, $property));

            $emailsData = settings()->get("page_email");

            if (!empty($emailsData)) {
                Mail::to($emailsData)->send(new ChatSend($request, $client, $property));
            } else {
                Log::error('No valid emails found in settings()->get("page_email")');
            }

            // Clear cookies if mail is sent successfully
            $cookie_name = 'dp_';
            foreach ($_COOKIE as $name => $value) {
                if (stripos($name, $cookie_name) === 0) {
                    \Illuminate\Support\Facades\Cookie::queue(Cookie::forget($name));
                }
            }
        } catch (\Throwable $exception) {
            Log::channel('email')->error('Email sending failed', [
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
                'trace' => $exception->getTraceAsString(),
            ]);
        }

        return redirect()->back()->with(
            'success',
            'Twoja wiadomość została wysłana. W najbliższym czasie skontaktujemy się z Państwem celem omówienia szczegółów!'
        );
    }

    function contact(ContactFormRequest $request, Recipient $recipient)
    {
        try {
            $client = $this->repository->createClient($request);

            $emailsData = settings()->get("page_email");

            if (!empty($emailsData)) {
                Mail::to($emailsData)->send(new ChatSend($request, $client));
            } else {
                Log::error('No valid emails found in settings()->get("page_email")');
            }

            // Clear cookies if mail is sent successfully
            $cookie_name = 'dp_';
            foreach ($_COOKIE as $name => $value) {
                if (stripos($name, $cookie_name) === 0) {
                    \Illuminate\Support\Facades\Cookie::queue(Cookie::forget($name));
                }
            }

            //$this->sendToVox($request->validated());

        } catch (\Throwable $exception) {
            Log::channel('email')->error('Email sending failed', [
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
                'trace' => $exception->getTraceAsString(),
            ]);
        }
        return redirect()->back()->with(
            'success',
            'Twoja wiadomość została wysłana.'
        );
    }

    private function sendToVox(array $validated)
    {
        $recipient = env('VOX_MAIL');
        Log::info('sendToVox called');

        $emailData = $this->mapDataToVoxEmailView($validated);
        Log::info('Mapped Email Data');

        if (empty($emailData)) {
            Log::error('Email data is empty! Not sending email.');
            return;
        }

        $voxContactMail = new VoxContactMail($emailData);
        Mail::to($recipient)->send($voxContactMail);
    }

    private function mapDataToVoxEmailView(array $validated)
    {

        $schema = [
            "investment_name" => 'Apartamenty Nowe Miasto',
            "name" => $validated['form_name'] ?? null,
            "email" => $validated['form_email'] ?? null,
            "phone" => $validated['form_phone'] ?? null,
            "area_from" => $validated['area-min'] ?? null,
            "area_to" => $validated['area-max'] ?? null,
            "city" => $validated['city'] ?? null,
            "message" => $validated['form_message'] ?? null,
            "agreements" => []
        ];

        $schema['agreements'] = $this->getAgreements($validated);
        return $schema;
    }

    private function getAgreements(array $validated): array
    {
        $rules = [];

        foreach ($validated as $key => $value) {
            if (preg_match('/^rule_(\d+)$/', $key, $matches) && $value) {
                $ruleId = (int) $matches[1];
                $rule = RodoRules::find($ruleId);

                if ($rule) {
                    $rules[] = [
                        'title' => $rule->title_vox,
                        'description' => strip_tags($rule->text),
                    ];
                }
            }
        }

        return $rules;
    }
}
