<?php require './requires/profielpage.php';

$profile = new Profile();

if (isset($_POST) && isset($_POST["updateUser"])){

    $profile->updateUser($_POST['usernameChange'],$_POST['passwordChange'],$_POST['emailChange'],$_POST['mobileChange']);
}

$user = $profile->getUser();

require 'views/profiel.view.php';
