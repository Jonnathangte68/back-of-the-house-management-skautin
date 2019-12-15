<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class WelcomeScreenController extends Controller
{
    public function __invoke(Request $request)
    {

        // $apiServerPath = env("API_SERVER");
        // $client = new Client();
        // dd($apiServerPath.'/talentplaylists');
        // // talentplaylists
        // $res = $client->request('GET', 'http://localhost:9000/talentplaylists');
        // return $res->getBody();


        // Temporary disable
        $html = '<h1>Test Website Builder</h1> <div id="gjs"> <h1>Hello World Component!</h1> </div><div style="position: absolute;width:300px;bottom: 5%;left:42%;background-color:#2E8B57;text-align: center;padding: 10px;border-radius:15%;"> <button id="0x817" style="font-size: 20px;background-color:white;border-color: white;font-weight: 200;">SAVE</button> </div>';
        return view('public.landing.welcome', [
            'content' => $html
        ]);
    }
}
