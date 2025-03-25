<?php
    $id=$_POST['id'];
    $about=$_POST['about'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $off=$_POST['off'];
    $category=$_POST['category_id'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="UPDATE `products` SET `name` = '$name', `about` = '$about',`price`='$price',`off`='$off',`category_id`='$category'  WHERE `products`.`id` = $id;";
    $result=mysqli_query($connect,$sql);
    // $sql2="UPDATE `category_products` SET `category_id` = '$category' WHERE `product_id` = $id and `id` = ";
    // $result2=mysqli_query($connect,$sql2);
    header("Location: index.php")
?>