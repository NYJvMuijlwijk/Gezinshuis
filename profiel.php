<?php require 'requires/head.php'; ?>
<?php require 'requires/profielpage.php'; 
require 'requires/sidenav.php';

$profile = new Profile();

if($_SESSION['user']->roleid == '1'){
    $role = "profiles_owners";
}
elseif($_SESSION['user']->roleid == '2'){
    $role = "profiles_doctors";
}
elseif($_SESSION['user']->roleid == '3'){
    $role = "profiles_parents";
}


/**
 * kijkt of er een post is en of die komt van de knop met name updateUser
 */
if (isset($_POST) && isset($_POST["updateUser"])){

    /**
     * kijkt naar de class en pakt van daar de functie updateUser en stopt post variabelen erin
     */
    $profile->updateUser($role, $_POST['usernameChange'],$_POST['passwordChange'],$_POST['emailChange'],$_POST['mobileChange']);
}

/**
 * zet de functie getUser in een variabele
 */
$user = $profile->getUser($role);

// var_dump($user);

// $_SESSION['user'] = $user['fname'];

require 'views/profiel.view.php'; 
require 'requires/foot.php'; 
?>