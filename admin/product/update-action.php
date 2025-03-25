<?php
    $id=$_POST['id'];
    $about=$_POST['about'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $off=$_POST['off'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="UPDATE `products` SET `name` = '$name', `about` = '$about',`price`='$price',`off`='$off'  WHERE `products`.`id` = $id;";
    $result=mysqli_query($connect,$sql);
    header("Location: index.php")
?>