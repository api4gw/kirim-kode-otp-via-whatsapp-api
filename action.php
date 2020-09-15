<?php 

$to      = $_POST['phone'];
$otp     = $_POST['otp'];
$message = $otp . " - OTP untuk login kedalam sistem";
$url     = 'https://wa.alim.my.id/send';
$header  = array(
    'Content-Type: application/json',
);
$params = [
    'to'      => $to,
    'messages' => $message,
];
$params_post = json_encode($params, JSON_PRETTY_PRINT);
$post        = curl_init($url);
curl_setopt($post, CURLOPT_HTTPHEADER, $header);
curl_setopt($post, CURLOPT_POSTFIELDS, $params_post);
curl_setopt($post, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($post);
curl_close($post);
echo $response;
