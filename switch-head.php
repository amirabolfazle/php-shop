<?php
        if (isset($_COOKIE['day'])){
            if ($_COOKIE['day']==0){
                echo '.card,.foot{
                    background-color: #212529;
                } .mini-body{background-image:url(https://motionbgs.com/i/c/364x205/media/3335/topographic-textures.jpg);background-repeat: no-repeat;background-size: cover;}';
            }else{
                echo '.card,.foot{
                    background-color: #f8f9fa;
                } .mini-body{background-image:url(https://wallpapercave.com/wp/wp9081316.jpg);background-repeat: no-repeat;background-size: cover;}';
            }
        }else{
            echo '.mini-body{background-image:url(https://motionbgs.com/i/c/364x205/media/3335/topographic-textures.jpg);background-repeat: no-repeat;background-size: cover;}';
        }
?>