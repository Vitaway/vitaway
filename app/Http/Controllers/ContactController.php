<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\ContactRequest;
    use App\Mail\NewSubscriber;
    use App\Mail\NotifyNewContact;
    use App\Mail\NotifyNewContactToApp;
    use App\Mail\NotifyNewSubscriber;
    use App\Models\Contact;
    use App\Models\Subscriber;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class ContactController extends Controller {
        public function store(ContactRequest $request) {
            Contact::create($request->validated());

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NotifyNewContactToApp($request->validated()));
            Mail::to($request->email)->send(new NotifyNewContact());

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
                Subscriber::create(['email' => $request->email]);

                Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NotifyNewSubscriber());
                Mail::to($request->email)->send(new NewSubscriber());

                return response()->json([
                    'message' => "Welcome to the Vitaway Community"
                ], 201);
            }, fn() => response()->json([
                'message' => "Welcome to Vitaway - Your Gateway to Health and Wellness!"
            ], 201));
        }
    }
