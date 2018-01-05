<?php
$access_token = 'G0eVCo7ki0fD7jI8NWLKa+xGBKjBMrCUOxQIu3D65jXjtvWVLEYE6BaxoS+yMAa2PyNLlWHXVIB31uVAbyuV0OLaIEbaLhAsP0+EYo+hpJKt0AedFTVeZsE86W1DwuC4lOIYvVOfz/QR6lCh1RfsOAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
