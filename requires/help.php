<?php

//helper file for encryption and authentication



// see if session already started otherwise start
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


// set the keys for encryption
function getKeys($key_id = 1)
{
    require "connection.php";
    try {
        // create query to get key and iv
        $statement = $connection->prepare("SELECT cryp_key, iv FROM encrypt WHERE id = :id");
        $statement->bindValue(":id", $key_id);
        $statement->execute();

        // get key and iv
        $row = $statement->fetch();
        $iv = $row["iv"];
        $key = $row["cryp_key"];
        // set key and iv as $_SESSION
        $_SESSION["key"] = $key;
        $_SESSION["iv"] = $iv;

    } catch (Exception $e) {
        die('sucky sucky');
    }
}
function encrypt($plaintext)
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

function decrypt($crypted_text)
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
function verifyRole($role_required){

//        check if user is admin
    if ($_SESSION["user"]->roleid == 1) {
        return true;
//        check if user has $role_required role
    } elseif ($role_required == $_SESSION["user"]->roleid) {
        return true;
    } else {
        return false;
    }
}
//checks id required returs true if passed, false if denied
function verifyId($id_required)
{
    //        check if user is admin
    if ($_SESSION["user"]->roleid == 1) {
        return true;}
    //      check if user has $id_required
    elseif ($id_required == $_SESSION["user"]->id) {
        return true;
    } else{
        return false;
    }
}
/**
 * Created by PhpStorm.
 * User: Arthur Rooijen
 * Date: 03/11/2018
 * Time: 19:33
 */