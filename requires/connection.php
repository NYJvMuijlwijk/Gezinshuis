<?php

$dsn = 'mysql:host=127.0.0.1;dbname=2018_P1_03_ghdb_2018';
$username = '2018_P1_03';
$password = 'F9JHyuzgq@yXqX';

try {
    $connection = new PDO($dsn, $username, $password);
}
catch(PDOException $e) {
    echo $e->getmessage();
}