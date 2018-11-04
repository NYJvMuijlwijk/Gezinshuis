<section class="add_gebruiker">
    <div class="container-fluid content">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h5>Gebruiker Toevoegen</h5>
                <form action="requires/add_gebruikerdata.php" method="post">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Username:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Wachtwoord:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Voornaam:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="fname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tussenvoegsel:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tussenvoegsel">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Achternaam:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="lname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Telefoonnummer:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="mobile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Voornaam kind:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="fname_child">
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <select name="role">
                            <option value="profiles_owners">Admin</option>
                            <option value="profiles_doctors">Invaller/Stagiaire</option>
                            <option value="profiles_parents">Ouder</option>
                        </select>
                    </div><br>
                    <input class="btn btn-secondary" name="newUser" type="submit" value="Toevoegen">
                </form>
