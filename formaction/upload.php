<?php
    require '../requires/connection.php';

    $imagedata = file_get_contents($_FILES["newimage"]["tmp_name"]);
    $sql = $connection->prepare("INSERT INTO images (file) VALUES (:imagedata)");
    $sql->bindParam(":imagedata", $imagedata);
    $sql->execute();

    header("location: ../galerij.php");
?>