<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$client = new IntercomClient("dG9rOmFkODRlMjdhX2M2MGVfNDU0Nl85MjRiXzJkY2U5Y2E4NjY5NToxOjA=", null);

// $response = Fanatical_Intercom_API::call("admins");

// $response = $client->users->getUsers(["email" => "mayer@lionsolution.it"]);
// var_dump($response);

// $admin = $client->admins->getAdmins(["email" => "chad@sugaroutfitters.com"]);
// echo($admin);
// $admin_id = $admin["id"];



// get all conversations for individual
$response = $client->conversations->getConversations([
    "email" => "johannes.sidarta@revolutionit.com.au"
    ]);

// var_dump($response);
/*foreach ($response->conversations as $conversation){
    // echo $conversation->conversation_message->body;
    var_dump(getdate($conversation));
    // var_dump($conversation);
    echo '<hr>';
}*/



// get individual convo from list
$response = $client->conversations->getConversation("7270467701");
var_dump($response);
/*







-- to do
given email address or id or whatever -- go find convo for that id/email/etc and display that info


class Fanatical_Intercom_API
{

    public static function call($url, $data, $action="GET")
    {
        $token = "dG9rOmFkODRlMjdhX2M2MGVfNDU0Nl85MjRiXzJkY2U5Y2E4NjY5NToxOjA=";

        $call_url = "https://api.intercom.io/";

        if (!empty($data))
        {
            $data = json_encode($data);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10 );
        curl_setopt($ch, CURLOPT_URL, $call_url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);

        switch($action){
            case "POST":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                break;
            case "GET":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                break;
            case "PUT":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                break;
            case "DELETE":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            default:
                break;
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-type:application/json',
            'Authorization:Bearer '.$token,
            'Accept:application/json',
        ));

        curl_setopt($ch, CURLOPT_USERAGENT, "SugarCRM Intercom Integration");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $output = curl_exec($ch);

        // $info = curl_getinfo($ch);
        // var_dump($info);

        if (empty($output)) { 
             $error = (curl_error($ch)); 
             var_dump($error);
             curl_close($ch);
             return false;
        } 
        curl_close($ch);
        $decoded = json_decode($output);
        
        return $decoded;
    }
}

*/

/*
curl https://api.intercom.io/users \
-u dG9rOmFkODRlMjdhX2M2MGVfNDU0Nl85MjRiXzJkY2U5Y2E4NjY5NToxOjA= \
-H 'Accept: application/json'*/

