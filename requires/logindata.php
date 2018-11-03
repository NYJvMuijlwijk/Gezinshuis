<?php
require 'connection.php';
require 'functions.php';

$username = "";
$password = "";


//Na het drukken van de knop worden de variabelen gevuld met waardes en wordt er gecontroleerd
if($_POST) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = $connection->prepare("select * from users where username = ? and password = ?" );
    $query->bindValue(1,$username);
    $query->bindValue(2,hash("sha256", $password));
    $query->execute();
    $account = $query->fetchObject();

    // var_dump($account);
    
    if ($account != null){

        // login
        $_SESSION['user'] = $account;
        $_SESSION['loginstatus'] = true;
        
        header('Location: ./user.php');

    }
    else
    {
        echo ErrorMessage();
    }
    
}