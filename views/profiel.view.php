<?php require 'requires/head.php'; ?>

<section class="main">
    <div class="container content">
        <div class="row">
            <div class="col-md-3 offset-10">
                <button class="btn btn-secondary changeUserOnClick">Profiel bewerken</button>
            </div>
            <div class="col-11">
                <div class="container emp-profile">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="profile-img">
                                    <img src="./img/profile.png" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="profile-head">
                                    <h5>
                                        <?php
                                        echo $user->fname . " " . $user->lname;
                                        ?>
                                    </h5>
                                </div>
                                <div class="updateUser">
                                <form action="databaseprofiel2.php" method="post">
                                    <div class="form-group row">
                                        <label for="usernameChange" class="col-sm-3 col-form-label">Gebruikersnaam:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="usernameChange" value="<?php echo $user->username; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="emailChange" class="col-sm-3 col-form-label">Email:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="emailChange" value="<?php echo $user->email; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mobileChange" class="col-sm-3 col-form-label">Mobiele nummer:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="mobileChange" value="<?php echo $user->mobile; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="passwordChange" class="col-sm-3 col-form-label">Wachtwoord:</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" name="passwordChange">
                                        </div>
                                    </div>
                                    <input class="btn btn-secondary" name="updateUser" type="submit" value="submit">
                                </form>
                                </div>

                                <div class="showUser">
                                <form>

                                    <div class="form-group row">
                                        <label for="usernameChange" class="col-sm-3 col-form-label">Gebruikersnaam</label>
                                        <label class="col-sm-8 col-form-label"><?php echo $user->username; ?></label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="emailChange" class="col-sm-3 col-form-label">Email</label>
                                        <label class="col-sm-8 col-form-label"><?php echo $user->email; ?></label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mobileChange" class="col-sm-3 col-form-label">Mobiele nummer</label>
                                        <label class="col-sm-8 col-form-label"><?php echo $user->mobile; ?></label>
                                    </div>
                                </form>
                                </div>
                             </div>
                         </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>

</script>