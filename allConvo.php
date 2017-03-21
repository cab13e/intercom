<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$client = new IntercomClient("dG9rOmFkODRlMjdhX2M2MGVfNDU0Nl85MjRiXzJkY2U5Y2E4NjY5NToxOjA=", null);

// get all conversations for individual
$response = $client->conversations->getConversations([
    "email" => "johannes.sidarta@revolutionit.com.au"
    ]);