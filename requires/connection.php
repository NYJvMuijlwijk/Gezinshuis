<?php

$dsn = 'mysql:host=127.0.0.1:3307;dbname=2018_P1_03_ghdb_2018';
$username = 'root';
$password = 'root';

try {
    $connection = new PDO($dsn, $username, $password);
}
catch(PDOException $e) {
    echo $e->getmessage();
}