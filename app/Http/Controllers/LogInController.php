<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Ramsey\Uuid\Uuid;

class LogInController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            error_log("trying");
            $input = $request->all();
            $handle = file("../app/login_data.txt");
            if ($handle) {
                for( $j= 0; $j < count($handle) ; $j+=2 ) {
                    $redirectChangePassword = (in_array($input['password'], ['ab45!@Ka', 'cb45!@Ka'])) ? true : false;
                    if(strcmp($handle[$j], $input['username']) && strcmp($handle[$j+1], $input['password'])) {
                        $changePasswordToken = '';
                        if($redirectChangePassword) {
                            $changePasswordToken = sha1(time());
                        } else {
                            $uuid1 = Uuid::uuid1();
                            $request->session()->put('secret-login', $uuid1->toString());
                            $request->session()->put('user', $input['username']);
                            return json_encode(array(
                                'status' => true, 
                                'message' => 'loged in', 
                                'redirect' => $redirectChangePassword, 
                                'change_token' => $changePasswordToken
                            ));
                        }
                        $request->session()->put('change_token', $changePasswordToken);
                        $request->session()->put('user', $input['username']);
                        return json_encode(array(
                            'status' => true, 
                            'message' => 'loged in', 
                            'redirect' => $redirectChangePassword, 
                            'change_token' => $changePasswordToken
                        ));
                    }
                }
            }
            return json_encode(array(
                'status' => false, 
                'message' => 'not logged', 
                'redirect' => false
            ));
        } catch(Exception $e) {
            error_log($e->getMessage());
        }
    }
}
