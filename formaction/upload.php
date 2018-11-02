<?php
    $pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=<br/>', '<br/>', '<br/>');

    $imagedata = file_get_contents($_FILES["newimage"]["tmp_name"]);
    $sql = $pdo->prepare("INSERT INTO images (image_file) VALUES (:imagedata)");
    $sql->bindParam(":imagedata", $imagedata);
    $sql->execute();

    header("location: ../galerij.php");
?>