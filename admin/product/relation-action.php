<?php
    $id=$_POST['id'];
    $cat_id=$_POST['cat_id'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="INSERT INTO `category_products` (`category_id`, `product_id`) VALUES ('$cat_id', '$id');";
    $result=mysqli_query($connect,$sql);
    header("Location: index.php")
?>