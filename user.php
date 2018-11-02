<?php require 'requires/head.php'; ?>
<?php require 'requires/sidenav.php'; ?>


<section id="user">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">

                <div class="container content">
                    Welkom <?= $_SESSION["user"]->fname ." ". $_SESSION["user"]->tussenvoegsel ." ". $_SESSION["user"]->lname;?>
                </div>

            </div>
        </div>
    </div>
    
</section>

<?php require 'requires/foot.php'; ?>