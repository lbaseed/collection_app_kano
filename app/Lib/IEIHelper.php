<?php

namespace App\Lib;
use App\Models\Token;

class IEIHelper
{
    public $URI = "https://ieiplcng.azurewebsites.net";
    public function __construct()
    {
        // $this->middleware('auth');
    }

    function generate_token(){
        
        $payload = json_encode([
            "username" => "k1info",
            "password" => "@Khadija001",
        ]);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->URI."/api/Auth/Login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 20,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "Content-Type:application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $output_array = json_decode($response);
        // print_r($output_array->token);

        $token = $output_array->token;
        $jwt = explode(".", $token);
        $payload = base64_decode($jwt[1]);
        $data = json_decode($payload);

        // insert record to DB
        $insert = Token::create([
           "token" => $token,
           "type" => "Bearer",
           "duration" => $data->exp - $data->iat,
           "iat" => $data->iat,
           "status" => "valid" 
        ]);

        if($insert){
            return $token;
        }

    }

    function get_token(){
        
        $tk = Token::where('status','valid')->first();
        
        // check expiary
        if($tk and time() < ($tk->duration + $tk->iat)){
            
            // token is still valid and returned
            return $tk->token;
        }else{
            if($tk){
                $tk->status = "invalid";
                $tk->save();
            }
            
            return $this->generate_token();
        }

    }

    function generate_policy_iei($token, $data){
        
        $payload = json_encode($data);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->URI."/api/Insurance/AgentBuyInsurance",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 20,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "Content-Type:application/json",
                "Authorization: $token"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        $output_object = json_decode($response);

        // echo $httpcode;

       
        if($httpcode==200){
            
            if($output_object->statusCode == 1)
            {
                return  ["res" => $output_object->modelToReturn];
                
            }elseif ($output_object->statusCode == 2){

                // call reprint end point
                  return  $this->resend_policy($data["registrationNumber"]);
            }else{
                return  ["res" => $output_object->message];
                
            }
            
                
        }else{
                    
            $output_array = json_decode($response, true);
            return ["res" => "Error", "msg"=>$output_array];
        }

    }

    function resend_policy($reg_num){
      

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->URI."/api/Insurance/ReprintDetailsSearch",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 20,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "\"".$reg_num."\" ",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "Content-Type:application/json-patch+json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        $output_object = json_decode($response);

        if($httpcode==200){
            
            if($output_object->statusCode == 1)
            {
                return  ["res" => $output_object->modelToReturn];

            }else{
                return  ["res" => $output_object->message];
                
            }
            
        }else{
                    
            $output_array = json_decode($response, true);
            return ["res" => "Error", "msg"=>$output_array];
        }

    }


}


?>