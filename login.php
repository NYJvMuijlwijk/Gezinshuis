<?php require 'requires/head.php'; ?>
<?php require 'requires/nav.php'; ?>

<section class="main">
    <div class="container content">
        <div class="row">
            <div class="col-lg-10 mx-auto">

                <?php require 'requires/logindata.php'; ?>

                <form action="login.php" method="post">

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <label for="username">Gebruikersnaam:</label>
                            <input class="form-control" name="username" type="text" required>
                        </div>
                        <div class="col-sm-10">
                            <label for="password">Wachtwoord:</label>
                            <input class="form-control" name="password" type="password" required>
                        </div>
                    </div>

                    <div class = "row">
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" name="submitLogin" value="Inloggen">
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>

<?php require 'requires/foot.php'; ?>