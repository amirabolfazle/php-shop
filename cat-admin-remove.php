<?php
    $id=$_GET['id'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="DELETE FROM `categories` WHERE `categories`.`id` = $id;";
    $result=mysqli_query($connect,$sql);
    header("Location: cat-admin.php")
?>