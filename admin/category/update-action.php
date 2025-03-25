<?php
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $id=$_POST['id'];
    $name=$_POST['name'];
    $sql2="select * from categories where id=$id";
    $result2=mysqli_query($connect,$sql2);
    if (mysqli_num_rows($result2)>0){
        while($row2=mysqli_fetch_assoc($result2)){
            $img=$row2['img'];
        }
    }
    $address='../cdn/categories/'.$id;
    if($move=move_uploaded_file($_FILES['img']['tmp_name'],$address)){
            
  
            $sql="UPDATE `categories` SET `name` = '$name', `img` = 'http://localhost/hamster/admin/cdn/categories/".$id."' WHERE `categories`.`id` = $id;";
       
    }else{
        $sql="UPDATE `categories` SET `name` = '$name', `img` = '$img' WHERE `categories`.`id` = $id;";
    }
    $result=mysqli_query($connect,$sql);
    header("Location: index.php");
?>