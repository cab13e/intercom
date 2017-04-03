<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;
session_start();

$client = new IntercomClient("dG9rOmFkODRlMjdhX2M2MGVfNDU0Nl85MjRiXzJkY2U5Y2E4NjY5NToxOjA=", null);

// get all conversations for individual
$response = $client->conversations->getConversations([
    "email" => "johannes.sidarta@revolutionit.com.au"
    ]);


    ?>
<html>
    <head>
    </head>
    <body>
        <script>
            
        </script>

<?php
foreach($response->conversations as $conversation)
{
    $id = $conversation->id;

   $day = (getdate($conversation->updated_at));
   // hours min month mday year
    echo ("<a href='individualConvo.php?id=" . $id . "'>" . $day[hours] . ':' . $day[minutes] . ' ' . $day[month] . '/' . $day[mday] . '/' . $day[year] . '</a>');
    if($conversation->conversation_message->subject != '')
        echo ( $conversation->conversation_message->subject);
    else
        echo mb_strimwidth( $conversation->conversation_message->body , 0, 20); 

    // echo '</br>';
    // echo $id;
    // echo $conversation->conversation_message->body;
    // var_dump($conversation);
    echo '<hr>';
}
?>


    </body>
</html>