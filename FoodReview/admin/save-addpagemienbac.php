<?php
    $title = $_POST['title'];
    $image = $_POST['image'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $introduce = $_POST['introduce'];

    $connection = new PDO("mysql:host=127.0.0.1;dbname=vidu;charset=utf8","root","");
    $query = "INSERT into pagemienbac (title,image,location,price,introduce) values('$title','$image','$location','$price','$introduce')";
    $stmt = $connection->prepare($query);
    $stmt->execute();

    header('location: adminpagemienbac.php');
?>