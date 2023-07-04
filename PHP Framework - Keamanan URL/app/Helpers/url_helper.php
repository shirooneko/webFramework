<?php
function encryptUrl($data)
{
    $key = 'MYs3cR3tK3y#2023';
    $iv = openssl_random_pseudo_bytes(16);
    $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);
    $encodedData = base64_encode($iv . $encrypted);
    return rawurlencode($encodedData);
}

function decryptUrl($encryptedData)
{
    $key = 'MYs3cR3tK3y#2023';
    $decodedData = base64_decode(rawurldecode($encryptedData));
    $iv = substr($decodedData, 0, 16);
    $encrypted = substr($decodedData, 16);
    return openssl_decrypt($encrypted, 'AES-256-CBC', $key, 0, $iv);
}
