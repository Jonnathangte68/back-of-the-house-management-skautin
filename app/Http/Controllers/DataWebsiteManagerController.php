<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class DataWebsiteManagerController extends Controller
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

    public function store(Request $request)
    {
        $apiServerPath = env("API_SERVER");
        $client = new Client();
        try {
            $result = $client->post($apiServerPath.'/api/website-content-test', [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'code' => $request->input('code'),
                    'content' => json_encode($request->input('content')),
                ]
            ]);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $guzzleResult = $e->getResponse();
        }
        return $result->getBody()->getContents();
    }
}
