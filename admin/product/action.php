<?php
    $name=$_POST['name'];
    $about=$_POST['about'];
    $price=$_POST['price'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="INSERT INTO `products` (`name`, `about`,`price`) VALUES ('$name', '$about','$price');";
    $result=mysqli_query($connect,$sql);
    header("Location: index.php")
?>