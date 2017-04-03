<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$client = new IntercomClient("dG9rOmFkODRlMjdhX2M2MGVfNDU0Nl85MjRiXzJkY2U5Y2E4NjY5NToxOjA=", null);
$id = $_GET['id'];
// echo $id;
// get individual convo from list
$response = $client->conversations->getConversation($id);

// $response = $client->getConversation(array(
//   "id" => $id
// ));
// var_dump($response);

foreach($response->conversation_parts->conversation_parts as $convo)
   {
        $day = (getdate($convo->updated_at));
        echo "At " . $day[hours] . ':' . $day[minutes] . ' ' . $day[month] . '/' . $day[mday] . '/' . $day[year] . " " . $convo->author->type . " said: ";
       echo $convo->body;
       echo '<hr>';
   }


// echo $response->conversation_message->body;