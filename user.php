<?php require 'requires/head.php'; ?>

<section id="user">
    <div class="container-fluid">

        <div class="row">

            <div class="col-2 userpage">
                
                <?php require 'requires/sidenav.php'; ?>

            </div>

            <div class="col-10 userpage">
            
                <?php require 'requires/nav.php'; ?>

                <div class="container content">
                    Welkom <?= $_SESSION["user"]->fname ." ". $_SESSION["user"]->tussenvoegsel ." ". $_SESSION["user"]->lname;?>
                </div>

                <?php require 'requires/foot.php'; ?>

            </div>

        </div>

    </div>
    
</section>

