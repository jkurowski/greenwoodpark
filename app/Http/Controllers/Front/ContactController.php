<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

use App\Mail\ChatSend;
use App\Models\Inline;
use App\Models\Page;
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
        if(!$request->get('form_surname')) {
            Property::find($id)->notify(new PropertyNotification($request));
            Mail::to(settings()->get("page_email"))->send(new MailSend($request));
            (new \App\Models\RodoClient)->saveOrCreate($request);
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
}
