<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreProfileRequest;
    use App\Models\SocialMedia;
    use Illuminate\Support\Facades\Auth;

    class ProfileController extends Controller {
        public function store(StoreProfileRequest $request) {
            Auth::user()->socialMedia()->create($request->validated());

            Auth::user()->name = $request->name;
            Auth::user()->email = $request->email;
            Auth::user()->save();

            return redirect()->back();
        }
    }
