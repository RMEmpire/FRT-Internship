<?php
header('Access-Control-Allow-Origin: ' . $_SERVER['SERVER_NAME']);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://eastus.api.cognitive.microsoft.com/sts/v1.0/issueToken');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{}');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Ocp-Apim-Subscription-Key: 3910a6beff224d248d9362698409a036')); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
echo curl_exec($ch);
?>
