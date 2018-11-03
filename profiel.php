<?php
require "requires/help.php";
// see if user is loggedin
if(!$_SESSION['loginstatus']) {
    header('Location: ./login.php');
}


require './requires/profielpage.php';

$profile = new Profile();

/**
 * kijkt of er een post is en of die komt van de knop met name updateUser
 */
if (isset($_POST) && isset($_POST["updateUser"])){

    /**
     * kijkt naar de class en pakt van daar de functie updateUser en stopt post variabelen erin
     */
    $profile->updateUser($_POST['usernameChange'],$_POST['passwordChange'],$_POST['emailChange'],$_POST['mobileChange']);
}

/**
 * zet de functie getUser in een variabele
 */
$user = $profile->getUser();

require 'views/profiel.view.php';
