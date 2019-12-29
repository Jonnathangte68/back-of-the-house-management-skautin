<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class PageEditorController extends Controller
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
        return view('dashboard.options.editor');
    }

    public function store(Request $request)
    {

    }

    public function edit(Request $request, String $page)
    {
        return view('editor_pages.edit', 
            [
                'page' => $page
            ]);
    }

    public function editNew(Request $request, String $page)
    {
        return view('editor_pages.editor-test-fly');
    }
}
