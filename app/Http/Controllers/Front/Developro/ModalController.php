<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use App\Mail\ChatSend;
use App\Models\Property;
use App\Notifications\PropertyNotification;
use App\Repositories\Client\ClientRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ModalController extends Controller
{
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function propertyModal(Property $property)
    {
        $success = false;

        return view('front.modals.discount', compact('property'))->render();
    }

    public function propertySendModal(Request $request, Property $property)
    {
        try {
            $client = $this->repository->createClient($request, $property);

            $property->notify(new PropertyNotification($request, $property));

            $emailsData = settings()->get("page_email");

            if (!empty($emailsData)) {
                Mail::to($emailsData)->send(new ChatSend($request, $client, $property));
            } else {
                Log::error('No valid emails found in settings()->get("page_email")');
            }

            // Clear cookies
            $cookie_name = 'dp_';
            foreach ($_COOKIE as $name => $value) {
                if (stripos($name, $cookie_name) === 0) {
                    \Illuminate\Support\Facades\Cookie::queue(Cookie::forget($name));
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Twoja wiadomość została wysłana. W najbliższym czasie skontaktujemy się z Państwem celem omówienia szczegółów!'
            ]);
        } catch (\Throwable $exception) {
            Log::channel('email')->error('Email sending failed', [
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
                'trace' => $exception->getTraceAsString(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.'
            ], 500);
        }
    }
}
