<?php
    $id=$_GET['id'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="DELETE FROM `products` WHERE `id` = $id;";
    $result=mysqli_query($connect,$sql);
    header("Location: index.php")
?>