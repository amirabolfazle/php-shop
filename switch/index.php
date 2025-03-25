<?php
    if (isset($_COOKIE['day'])){
        if ($_COOKIE['day']==0){
            setcookie('day',1,time()+999999,'/');
        }else{
            setcookie('day',0,time()+999999,'/');
        }
    }else{
        setcookie('day',1,time()+999999,'/');
    }
    header('Location: '.$_SERVER['HTTP_REFERER'])
?>