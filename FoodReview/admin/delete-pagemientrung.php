<?php
    $id = $_GET['id'];

    $connection = new PDO("mysql:host=127.0.0.1;dbname=vidu;charset=utf8","root","");
    $query = "delete from pagemientrung where id=$id";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $user = $stmt->fetch();

    header('location: adminpagemientrung.php');
?>