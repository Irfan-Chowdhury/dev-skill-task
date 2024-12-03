<?php

declare(strict_types=1);

namespace App\Http\Controllers;

// use App\Services\ShortUrlService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class HomeController
{
    // public $shortService;

    // public function __construct(ShortUrlService $shortUrlService)
    // {
    //     $this->shortService = $shortUrlService;
    // }

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
        return 23;
    }
}
