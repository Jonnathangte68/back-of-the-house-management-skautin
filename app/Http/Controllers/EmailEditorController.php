<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class EmailEditorController extends Controller
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

    public function index(Request $request)
    {
        return view('dashboard.options.email');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $date = $request->input('date');
        $color = $request->input('color');
        $toStore = (object)array(
            'title' => $title,
            'description' => $description,
            'date' => $date,
            'color' => $color,
        );
        $decoded = json_decode(file_get_contents("../app/todos.json"));
        array_push($decoded, $toStore);
        $jsonContent = json_encode($decoded);
        return file_put_contents("../app/todos.json", $jsonContent);
    }

    public function getAll() {
        $decoded = json_decode(file_get_contents("../app/todos.json"));
        return json_encode($decoded);
    }
}
