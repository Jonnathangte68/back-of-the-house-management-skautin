<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class WelcomeScreenController extends Controller
{
    public function __invoke(Request $request)
    {
        // Redirect if user is logged in
        if ($request->session()->has('secret-login')) {
            return redirect('/dashboard');
        }
        return view('public.landing.welcome', []);
    }
}
