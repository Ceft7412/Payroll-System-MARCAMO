<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'address' => 'required',
            'contact' => 'required',
            'birthdate' => 'required|date',
            'gender' => 'required',
            'status' => 'required',
            'nationality' => 'required',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'username' => $request->username,
            'address' => $request->address,
            'contact' => $request->contact,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'status' => $request->status,
            'nationality' => $request->nationality,
            'password' => Hash::make('admin'),
        ]);

        event(new Registered($user));



        return redirect(route('dashboard', absolute: false));
    }
}
