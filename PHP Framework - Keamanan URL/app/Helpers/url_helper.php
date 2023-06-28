<?php
function encryptUrl($data)
{
    $key = 'MYs3cR3tK3y#2023';
    $iv = random_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);
    return rawurlencode(base64_encode($iv . $encrypted));
}

function decryptUrl($encryptedData)
{
    $key = 'MYs3cR3tK3y#2023';
    $decodedData = base64_decode(rawurldecode($encryptedData));
    $ivLength = openssl_cipher_iv_length('AES-256-CBC');
    $iv = substr($decodedData, 0, $ivLength);
    $encrypted = substr($decodedData, $ivLength);
    return openssl_decrypt($encrypted, 'AES-256-CBC', $key, 0, $iv);
}
