<?php
    $names=$_POST['name'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="INSERT INTO `categories` (`id`, `name`, `img`) VALUES (NULL, '$names', 'https://hamsterkombat.io/images/hamsters/1.avif');";
    $result=mysqli_query($connect,$sql);
    header("Location: cat-admin.php")
?>