<!-- Navigation -->
<?php 
    
    $_SESSION['loginstatus'] ? $loginStatus = "uitloggen" : $loginStatus = "inloggen";
    $_SESSION['loginstatus'] ? $loginStatusLink = "logout" : $loginStatusLink = "login";

?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    
    <a class="navbar-brand" href="index.php"><img id="logo" src="./img/small/1.png"></a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTopMenu" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTopMenu">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="index.php">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="about.php">over ons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="contact.php">contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="<?= $loginStatusLink; ?>.php"><?= $loginStatus; ?></a>
            </li>
        </ul>
    </div>

</nav>