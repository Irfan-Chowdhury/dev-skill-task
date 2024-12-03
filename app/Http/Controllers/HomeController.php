<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

final class HomeController
{
    public function home()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors('Credentials do not matched !!');
    }

    public function dashboard()
    {
        if(!Auth::check()) {
            abort(403);
        }
        return view('pages.dashboard');
    }

    public function createUser(Request $request)
    {
        if(!Auth::check()) {
            abort(403);
        }

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string',
            'password' => 'required|min:5|confirmed',
        ]);

        $data = array_merge($validatedData,[
            'username' => $request->name . '_' . Str::random(3),
            'is_active' => true,
            'password' => bcrypt($validatedData['password']),
        ]);

        User::created($data);

        return redirect()->back()->with('success', 'User created successfully!');
    }
}
