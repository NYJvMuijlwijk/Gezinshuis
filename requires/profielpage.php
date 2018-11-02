<?php
/**
 * als session nog niet is gestart, start dit dan
 */
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

/**
 * Class Profile aangemaakt
 */
class Profile
{

    /**
     * functie om de gegevens van de user te updaten
     */
    public function updateUser($usernameChange, $passwordChange, $emailChange, $mobileChange)
    {
        /**
         * connection.php requiren, werkt niet buiten de class
         */
        require 'connection.php';

        $query = $connection->prepare("update users set username = ?, email = ?, mobile = ? where id = ? ");
        $query->bindValue(1, $usernameChange);
        $query->bindValue(2, $emailChange);
        $query->bindValue(3, $mobileChange);
        $query->bindValue(4, $_SESSION['user']->id);
        $query->execute();

        /**
         * als je wachtwoord niet leeg is en ingevuld, update dan het wachtwoord
         */
        if (isset($passwordChange) && !empty ($passwordChange)) {

            $query = $connection->prepare("update users set password = ? where id = ?");
            $query->bindValue(1, hash("sha256",$passwordChange));
            $query->bindValue(2, $_SESSION['user']->id);
            $query->execute();
        }

    }

    /**
     * functie om de gegevens van de user op te halen
     */
    public function getUser()
    {
        /**
         * connection.php requiren, werkt niet buiten de class
         */
        require 'connection.php';
        $query = $connection->prepare("select * from users where id = ?");
        $query->bindValue(1, $_SESSION['user']->id );
        $query->execute();

        return $query->fetchObject();
    }

}