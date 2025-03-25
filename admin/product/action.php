<?php
    $name=$_POST['name'];
    $about=$_POST['about'];
    $price=$_POST['price'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="INSERT INTO `products` (`name`, `about`,`price`) VALUES ('$name', '$about','$price');";
    $result=mysqli_query($connect,$sql);
    $sql_2 = "select * from products;";
    $resault_2 = mysqli_query($connect, $sql_2);
    if (mysqli_num_rows($resault_2)>0){
        while ($row=mysqli_fetch_assoc($resault_2)){
            $id=$row['id'];
        }
    }
    $sql3="INSERT INTO `category_products` (`id`, `category_id`, `product_id`) VALUES (NULL, '1', '$id');";
    $result3=mysqli_query($connect,$sql3);
    header("Location: index.php")
?>