<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username   = "#";
$apiKey     = "#";

// Initialize the SDK
$AT         = new AfricasTalking($username, $apiKey);

// Get the SMS service
$sms        = $AT->sms();

// Set the numbers you want to send to in international format
$recipients = "+25470yyyxx";
$recipients = "+25470yyyyxx,+254yyyyyxx";

// Set your message
$message    = "The Api works";

try {
    // Thats it, hit send and we'll take care of the rest
    $result = $sms->send([
        'to'      => $recipients,
        'message' => $message
    ]);

    print_r($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}