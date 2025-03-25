<?php
    session_start();
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="select * from users where username='$uname'";
    $res=mysqli_query($connect,$sql);
    if(mysqli_num_rows($res)>0){
        header('Location: error');
    }else{
        $sql2="INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES (NULL, '$uname', '$name', '$password');";
        $res2=mysqli_query($connect,$sql2);
        header('Location: /hamster/signin');
    }
?>