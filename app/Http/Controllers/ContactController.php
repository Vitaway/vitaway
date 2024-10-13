<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\ContactRequest;
    use App\Mail\NewSubscriber;
    use App\Mail\NotifyNewSubscriber;
    use App\Models\Contact;
    use App\Models\Subscriber;
    use App\Notifications\SendNewContact;
    use App\Notifications\SendNewContactToAdmin;
use App\Notifications\SendWelcomeToSubscriber;
use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Notification;

    class ContactController extends Controller {
        public function store(ContactRequest $request) {
            $contact = Contact::create($request->validated());

            $customEmail = env('MAIL_FROM_ADDRESS');
            Notification::route('mail', $customEmail)->notify(new SendNewContactToAdmin($contact));
            Notification::route('mail', $contact->email)->notify(new SendNewContact());

            return response()->json([
                'message' => "Thanks, We Appreciate Your Connection"
            ], 201);
        }

        /**
         * Store newly subscriber and send Email notification
         *
         * @param Request $request
         * @return Response
         */
        public function suscribe(Request $request) {
            return tryCatch(function() use ($request) {
                $subscriber = Subscriber::create(['email' => $request->email]);

                Notification::route('mail', $subscriber->email)->notify(new SendWelcomeToSubscriber());

                return response()->json([
                    'message' => "Welcome to the Vitaway Community"
                ], 201);
            }, fn() => response()->json([
                'message' => "Welcome to Vitaway - Your Gateway to Health and Wellness!"
            ], 201));
        }
    }
