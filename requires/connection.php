<?php

$dsn = 'mysql:host=127.0.0.1;dbname=gezinshuis';
$username = 'root';
$password = 'root';

try {
    $connection = new PDO($dsn, $username, $password);
}
catch(PDOException $e) {
    echo $e->getmessage();
}


