<?php
require 'connection.php';

if(isset($_POST)) {

    $role = $_POST['role'];

    require 'connection.php';
    $query = $connection->prepare("insert into {$role} (username, password, fname, tussenvoegsel, lname, email, mobile) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->bindValue(1, $_POST['username']);
    $query->bindValue(2, hash("sha256", $_POST['password']));
    $query->bindValue(3, $_POST['fname']);
    $query->bindValue(4, $_POST['tussenvoegsel']);
    $query->bindValue(5, $_POST['lname']);
    $query->bindValue(6, $_POST['email']);
    $query->bindValue(7, $_POST['mobile']);
    $query->execute();

    if ($_POST['role'] == 'profiles_parents') {
        $role = 'profiles_kids';

        require 'connection.php';
        $query = $connection->prepare("insert into {$role} (fname, tussenvoegsel, lname) VALUES (?, ?, ?)");
        $query->bindValue(1, $_POST['fname_child']);
        $query->bindValue(2, $_POST['tussenvoegsel']);
        $query->bindValue(3, $_POST['lname']);
        $query->execute();
    }

header('Location: ../gebruikers.php');
}