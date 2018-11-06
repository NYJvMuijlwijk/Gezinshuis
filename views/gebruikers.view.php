<section class="user">
    <div class="container-fluid content">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form action="add_gebruiker.php" method="post">
                    <input class="btn btn-secondary" name="newUser" type="submit" value="Nieuwe gebruiker toevoegen">
                </form><br>
                <h5>Admins</h5>
                <table class='table table-hover'>
                    <thead>
                    <th>Gebruikersnaam</th>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>Email</th>
                    <th>Telefoon</th>
                    </thead>
                    <tbody>
                    <?php

                    foreach($admins as $admin) {

                        ?> <tr>
                            <td style="width: 2%"><?= $admin['username']; ?></td>
                            <td style="width: 15%"><?= $admin['fname']; ?></td>
                            <td style="width: 15%"><?= $admin['tussenvoegsel']; ?></td>
                            <td style="width: 68%"><?= $admin['lname']; ?></td>
                            <td style="width: 68%"><?= $admin['email']; ?></td>
                            <td style="width: 68%"><?= $admin['mobile']; ?></td>
                        </tr> <?php

                    }

                    ?>
                    </tbody>
                </table>
                <h5>Invallers/Stagiaires</h5>
                <table class='table table-hover'>
                    <thead>
                    <th>Gebruikersnaam</th>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>Email</th>
                    <th>Telefoon</th>
                    </thead>
                    <tbody>
                    <?php

                    foreach($invallers as $invaller) {

                        ?> <tr>
                            <td style="width: 2%"><?= $invaller['username']; ?></td>
                            <td style="width: 15%"><?= $invaller['fname']; ?></td>
                            <td style="width: 15%"><?= $invaller['tussenvoegsel']; ?></td>
                            <td style="width: 68%"><?= $invaller['lname']; ?></td>
                            <td style="width: 68%"><?= $invaller['email']; ?></td>
                            <td style="width: 68%"><?= $invaller['mobile']; ?></td>
                        </tr> <?php

                    }

                    ?>
                    </tbody>
                </table>
                <h5>Ouders</h5>
                <table class='table table-hover'>
                    <thead>
                    <th>Gebruikersnaam</th>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>Email</th>
                    <th>Telefoon</th>
                    </thead>
                    <tbody>
                    <?php

                    foreach($parents as $parent) {

                        ?> <tr>
                            <td style="width: 2%"><?= $parent['username']; ?></td>
                            <td style="width: 15%"><?= $parent['fname']; ?></td>
                            <td style="width: 15%"><?= $parent['tussenvoegsel']; ?></td>
                            <td style="width: 68%"><?= $parent['lname']; ?></td>
                            <td style="width: 68%"><?= $parent['email']; ?></td>
                            <td style="width: 68%"><?= $parent['mobile']; ?></td>
                        </tr> <?php

                    }

                    ?>
                    </tbody>
                </table>
                <h5>Kinderen</h5>
                <table class='table table-hover'>
                    <thead>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    </thead>
                    <tbody>
                    <?php

                    foreach($childs as $child) {

                        ?> <tr>
                            <td style="width: 15%"><?= $child['fname']; ?></td>
                            <td style="width: 15%"><?= $child['tussenvoegsel']; ?></td>
                            <td style="width: 68%"><?= $child['lname']; ?></td>
                        </tr> <?php

                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>

</section>
