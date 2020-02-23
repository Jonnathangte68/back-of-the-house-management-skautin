<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $apiServerPath = env("API_SERVER");
        $client = new Client();
        $result = $client->get($apiServerPath.'/api/scriptfile');
        $serverResponse = json_decode($result->getBody()->getContents());
        return view('dashboard.options.scripts_view', ['files' => $serverResponse]);
    }

    public function editCodeView(Request $request, $fileId) 
    {
        $apiServerPath = env("API_SERVER");
        $client = new Client();
        $input = $request->all();
        try {
            $result = $client->get($apiServerPath.'/api/scriptfile/'.$fileId, []);
            $decResults = json_decode($result->getBody()->getContents());
            $fileContent = json_encode($decResults->content);
            return view('editor_pages.edit-code-view', ["fileContent" => $fileContent, "file" => $fileId]);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            dd($e->getResponse());
        }
    }

    public function store(Request $request)
    {
        $apiServerPath = env("API_SERVER");
        $client = new Client();
        $input = $request->all();
        try {
            $client->post($apiServerPath.'/api/scriptfile', [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'file_name' => $input['fileName'],
                    'webpage'   => $input['pageId']
                ]
            ]);
            return response()->json(["status" => "true", "message" => $input]);  
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $et = $guzzleResult = $e->getResponse();
            return response()->json(["status" => "false", "message" => $et]);   
        }
    }

    public function updateCode(Request $request) 
    {
        $apiServerPath = env("API_SERVER");
        $client = new Client();
        $input = $request->all();
        $apiPath = $apiServerPath . '/api/scriptfile/' . $input['file_name'];
        try {
            $client->put($apiPath, [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'file_name' => $input['file_name'],
                    'content'   => $input['content'],
                    'min_content'   => $input['min_content']
                ]
            ]);
            return response()->json(["status" => "true", "message" => "File content has been updated."]);  
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $et = $e->getResponse();
            return response()->json(["status" => "false", "message" => $et]);   
        }
    }

    public function delete(Request $request, $fileId) {
        $apiServerPath = env("API_SERVER");
        $client = new Client();
        $apiPath = $apiServerPath . '/api/scriptfile/' . $fileId;
        try {
            $client->delete($apiPath, [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => []
            ]);
            return response()->json(["status" => "true", "message" => "File has been deleted."]);  
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $et = $e->getResponse();
            return response()->json(["status" => "false", "message" => $et]);   
        }
    }
}
