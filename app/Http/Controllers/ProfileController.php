<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreProfileRequest;
    use App\Models\Contact;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class ProfileController extends Controller {
        public function store(StoreProfileRequest $request) {
            Auth::user()->socialMedia()->create($request->validated());

            Auth::user()->name = $request->name;
            Auth::user()->email = $request->email;
            Auth::user()->save();

            return redirect()->back();
        }

        public function storeContact(Request $request) {
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);

            return redirect()->route('contact')->with('success', 'Your contact submitted');
        }
    }
