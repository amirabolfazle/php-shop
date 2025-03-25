<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
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
</style>
  <link rel="preconnect" href="//fdn.fontcdn.ir">
<link rel="preconnect" href="//v1.fontapi.ir">
<link href="https://v1.fontapi.ir/css/Estedad" rel="stylesheet">
<?php
    session_start();
    include 'connect.php';
    if (isset($_SESSION['id'])){
        $er=0;
        $sql6='select * from users where id='.$_SESSION['id'];
        $res6=mysqli_query($connect,$sql6);
        while($row6=mysqli_fetch_assoc($res6)){
            $name=$row6['name'];
        }
    }else{
        $er=1;
    }
?>
<style>
    *{
        font-family: Estedad, sans-serif;
    }
</style>
    <title>همستر فارسی</title>
</head>
<body dir="rtl">
    <center>
        <?php
            if (isset($_COOKIE['day'])){
                if ($_COOKIE['day']==0){
                    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">';
                }else{
                    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">';
                }
            }
        ?>
            <img class="navbar-brand img-circle" src="https://s100.divarcdn.com/static/photo/afra/post/QpfdclBGzM4kRWC91k7-xA/59e5904e-d6bd-4235-9415-b2e77eccbba0.jpg" alt="">
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="#" tabindex="-1" aria-disabled="false"><h2>محصولات</h2></a>
                    </li>
                    <li class="nav-item active p-3" style="cursor: pointer;">
                        <a href="switch">
                            <?php
                                if (isset($_COOKIE['day'])){
                                    if ($_COOKIE['day']==0){
                                        echo '<img id="day" width="100" src="http://sagpaz.is-great.net/img/day.png" style="cursor: pointer;" alt="light">';
                                    }else{
                                        echo '<img id="night" width="100" src="http://sagpaz.is-great.net/img/night.png" style="cursor: pointer;" alt="dark">';
                                    }
                                }
                            ?>
                        </a>
                        
                    </li>
                </ul>
            </div>
            <?php
                if (isset($_SESSION['id'])){
                    echo "<div class='p-3 navbar-brand text-warning'>خوش آمدید <span class='text-light'>$name</span></div><div class='p-3'><a href='logout' class='btn btn-lg btn-danger'>خروج</a></div>";
                }else{
                    echo "<div class='p-3 navbar-brand text-warning'><a href='signin' class='btn btn-lg btn-warning'>وارد شوید</a></div>";
                }
            ?>
        </nav>
        <div class="mini-body">
            <div style="min-height: 15vh;"></div>
            <div class="container">
                <div class="row">
                    <?php
                    $sql='select * from categories';
                    $resault=mysqli_query($connect,$sql);
                    if (mysqli_num_rows($resault) > 0){
                        while($row=mysqli_fetch_assoc($resault)){
                            echo '
                            <div class="card col-3">
                                <br>
                                <img class="card-img-top" src="'.$row['img'].'" alt="Product" style="max-height: 350px;min-height:350px">
                                <div class="card-body">
                                <h1 class="card-title">'.$row['name'].'</h1>
                                    <p class="card-text"></p>
                                </div>
                                <div class="card-footer">
                                    <a class="btn btn-warning" href="products.php?id='.$row['id'].'"><h5>مشاهده</h5></a>
                                </div>
                            </div>
                            ';
                        }
                    }
                    ?>
                </div>
            </div>
            <div style="min-height: 25vh;"></div>
        </div>
    </center>
</body>
    <?php
    include 'footer.php';
    ?>
</html>