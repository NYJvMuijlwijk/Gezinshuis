<?php

/**
 * Class User aangemaakt
 */
class User
{

    public function getAdmin()
    {
        /**
         * connection.php requiren, werkt niet buiten de class
         */
        require 'connection.php';
        $query = $connection->prepare("select * from profiles_owners");
        $query->execute();

        return $query->fetchAll();
    }

    public function getDoctor()
    {
        /**
         * connection.php requiren, werkt niet buiten de class
         */
        require 'connection.php';
        $query = $connection->prepare("select * from profiles_doctors");
        $query->execute();

        return $query->fetchAll();
    }

    public function getParent()
    {
        /**
         * connection.php requiren, werkt niet buiten de class
         */
        require 'connection.php';
        $query = $connection->prepare("select * from profiles_parents");
        $query->execute();

        return $query->fetchAll();
    }

    public function getChild()
    {
        /**
         * connection.php requiren, werkt niet buiten de class
         */
        require 'connection.php';
        $query = $connection->prepare("select * from profiles_kids");
        $query->execute();

        return $query->fetchAll();
    }
}