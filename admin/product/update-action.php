<?php
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $id=$_POST['id'];
    $about=$_POST['about'];
    $name=$_POST['name'];
    $sql2="select * from categories where id=$id";
    $result2=mysqli_query($connect,$sql2);
    if (mysqli_num_rows($result2)>0){
        while($row2=mysqli_fetch_assoc($result2)){
            $img=$row2['img'];
        }
    }
    $address='../cdn/products/'.$id;
    $price=$_POST['price'];
    $off=$_POST['off'];
    $category=$_POST['category_id'];
    if($move=move_uploaded_file($_FILES['img']['tmp_name'],$address)){
        $sql="UPDATE `products` SET `name` = '$name', `about` = '$about',`price`='$price',`off`='$off',`img` = 'http://localhost/hamster/admin/cdn/products/".$id."'  WHERE `products`.`id` = $id;";
    }else{
        $sql="UPDATE `products` SET `name` = '$name', `about` = '$about',`price`='$price',`off`='$off',`img` = '$img'  WHERE `products`.`id` = $id;";
}
    $result=mysqli_query($connect,$sql);
    header("Location: index.php")
?>