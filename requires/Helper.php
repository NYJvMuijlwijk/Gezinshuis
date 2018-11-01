<?php

class Helper
{

    public static function encrypt($plaintext)
    {
// set variables
        $key = $_SESSION['key'];
        $method = "aes-256-cbc";
        $iv = $_SESSION['iv'];
//encrypt data
        $encrypted = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv);
// base encode  for server readability
        $output = base64_encode($encrypted);
// return output for database string
        return $output;
    }

    public static function decrypt($crypted_text)
    {
// set variables
        $key = $_SESSION['key'];
        $method = "aes-256-cbc";
        $iv = $_SESSION['iv'];
// base decode
        $decodedtext = base64_decode($crypted_text);
// decrypt data
        $decrypted = openssl_decrypt($decodedtext, $method, $key, OPENSSL_RAW_DATA, $iv);
// return $decrypted string
        return $decrypted;
    }
}




/**
 * Created by PhpStorm.
 * User: Arthur Rooijen
 * Date: 24/10/2018
 * Time: 00:10
 */