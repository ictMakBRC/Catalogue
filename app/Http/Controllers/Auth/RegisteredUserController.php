<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'other_names' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->name,
            'other_names' => $request->other_names,
            'full_name' => $request->name.' '.$request->other_names,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole('guest');
        event(new Registered($user));

        Auth::login($user);

        return redirect('account');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'other_names' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'contact' => 'required',
            'organization' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'country' => ['string', 'max:255'],
            //'code' => ['string', 'max:255'],
            'address' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->first_name,
            'first_name' => $request->first_name,
            'other_names' => $request->other_names,
            'full_name' => $request->first_name.' '.$request->other_names,
            'title' => $request->title,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'organization' => $request->organization,
            'position' => $request->position,
            'country' => $request->country,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole('guest');
        event(new Registered($user));
        Auth::login($user);

        return redirect('account/requests/'.$request->code);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'other_names' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'contact' => 'required',
            'organization' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'country' => ['string', 'max:255'],
            'address' => ['string', 'max:255'],
        ]);

        $user->update([
            'first_name' => $request->first_name,
            'other_names' => $request->other_names,
            'full_name' => $request->first_name.' '.$request->other_names,
            'title' => $request->title,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'organization' => $request->organization,
            'position' => $request->position,
            'country' => $request->country,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'User Updated Successfully');
    }
}
