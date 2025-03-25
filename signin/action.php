<?php
    session_start();
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $connect=mysqli_connect('localhost','root','','hamstershop');
    $sql="select * from users where username='$uname' and password='$password'";
    $res=mysqli_query($connect,$sql);
    if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)){
            $id=$row['id'];
        }
        $_SESSION['id']=$id;
        header('Location: /hamster/');
    }else{
        header('Location: error');
    }
?>