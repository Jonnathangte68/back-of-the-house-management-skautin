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

    public function get(Request $request, String $code)
    {
        $apiServerPath = env("API_SERVER");
        $client = new Client();
        try {
            $result = $client->get($apiServerPath.'/api/website-content-test/'.$code, [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'code' => $code
                ]
            ]);
            $serverResponse = json_decode($result->getBody()->getContents());
            if($serverResponse->content) {
                $response = array(
                    'status' => true, 
                    'message' => $serverResponse
                );
                return json_encode($response);
            } else {
                $response = array(
                    'status' => false, 
                    'message' => $serverResponse->content
                );
                return json_encode($response);
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $et = $guzzleResult = $e->getResponse();
            $response = array(
                'status' => false, 
                'message' => $et
            );
            return json_encode($response);
        }
        $response = array(
            'status' => false, 
            'message' => "Unexpected"
        );
        return json_encode($response);
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
                    'content' => $request->input('content'),
                    'styles' => $request->input('css'),
                ]
            ]);
            $serverResponse = json_decode($result->getBody()->getContents());
            if($serverResponse->status) {
                $response = array(
                    'status' => true, 
                    'message' => $serverResponse->message
                );
                return json_encode($response);
            } else {
                $response = array(
                    'status' => false, 
                    'message' => $serverResponse->message
                );
                return json_encode($response);
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $et = $guzzleResult = $e->getResponse();
            $response = array(
                'status' => false, 
                'message' => $et
            );
            return json_encode($response);
        }
        $response = array(
            'status' => false, 
            'message' => "Unexpected"
        );
        return json_encode($response);
    }
}
