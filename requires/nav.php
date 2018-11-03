<!-- Navigation -->
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

                    <?php if(!$_SESSION['loginstatus']) { ?>
                        <a class="nav-link js-scroll-trigger" href="login.php">Inloggen</a>
                    <?php } else { ?>

                </li>

                

            </ul>
        </div>

        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="hideable"><?= $_SESSION['user']->fname; ?></div>
                <img src="img/profile.png" alt="profile picture">
            </a>

            <div class="dropdown-menu" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="user.php">Gebruikersomgeving</a>
                <a class="dropdown-item" href="logout.php">Uitloggen</a>
            </div>
        </div>

        <?php } ?>

</nav>