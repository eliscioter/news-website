<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserProfile extends Controller
{
    public function sign_in_page() {
        return view('sign_in');
    }
    public function register_page() {
        return view('register');
    } 

    public function store(Request $request) {
        $formField = $request->validate([
            'email' => ['required', 'email', Rule::unique('users','email')],
            'username' => ['required', 'min:3', Rule::unique('users','username')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $formField['password'] = bcrypt($formField['password']);

        $user = User::create($formField);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    public function sign_out(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Signed out');

    }

    public function authenticate(Request $request) {
        $formField = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(auth()->attempt($formField)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Signed in');

        }

        return back()->withError(['username' => 'Invalid credentials'])->onlyInput('username');
    }
}
