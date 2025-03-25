<?php
    $id=$_POST['id'];
    $name=$_POST['name'];
    $img=$_POST['img'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="UPDATE `categories` SET `name` = '$name', `img` = '$img' WHERE `categories`.`id` = $id;";
    $result=mysqli_query($connect,$sql);
    header("Location: index.php")
?>