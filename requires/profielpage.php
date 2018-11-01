<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


class Profile
{

    public function updateUser($usernameChange, $passwordChange, $emailChange, $mobileChange)
    {
        require 'connection.php';

        $query = $connection->prepare("update users set username = ?, email = ?, mobile = ? where id = ? ");
        $query->bindValue(1, $usernameChange);
        $query->bindValue(2, $emailChange);
        $query->bindValue(3, $mobileChange);
        $query->bindValue(4, $_SESSION['user']->id);
        $query->execute();


        if (isset($passwordChange) && !empty ($passwordChange)) {

            $query = $connection->prepare("update users set password = ? where id = ?");
            $query->bindValue(1, hash("sha256",$passwordChange));
            $query->bindValue(2, $_SESSION['user']->id);
            $query->execute();
        }

    }

    public function getUser()
    {
        require 'connection.php';
        $query = $connection->prepare("select * from users where id = ?");
        $query->bindValue(1, $_SESSION['user']->id );
        $query->execute();

        return $query->fetchObject();
    }

}