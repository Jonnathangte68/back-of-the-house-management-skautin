<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Ramsey\Uuid\Uuid;

class LogOutController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
