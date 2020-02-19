<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class ScriptController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function view(Request $request)
    {
        return view('dashboard.options.scripts_view');
    }

    public function editCodeView(Request $request, String $fileId) 
    {
        return view('editor_pages.edit-code-view', ["fileContent" => ""]);
    }

    public function store(Request $request, $fileId)
    {
        
    }
}
