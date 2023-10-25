<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\ContactRequest;
    use App\Models\Contact;
    use App\Models\Subscriber;
    use Illuminate\Http\Request;

    class ContactController extends Controller {
        public function store(ContactRequest $request) {
            Contact::create($request->validated());

            return response()->json([
                'message' => "Thanks, We Appreciate Your Connection"
            ], 201);
        }

        public function suscribe(Request $request) {
            Subscriber::create(['email' => $request->email]);

            return response()->json([
                'message' => "Welcome to the Vitaway Community"
            ], 201);
        }
    }
