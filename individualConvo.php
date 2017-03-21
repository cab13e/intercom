<?php
require "vendor/autoload.php";
use Intercom\IntercomClient;

$client = new IntercomClient("dG9rOmFkODRlMjdhX2M2MGVfNDU0Nl85MjRiXzJkY2U5Y2E4NjY5NToxOjA=", null);

// get individual convo from list
$response = $client->conversations->getConversation("7270467701");
var_dump($response);