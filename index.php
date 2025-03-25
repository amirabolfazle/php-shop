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
  <link rel="preconnect" href="//fdn.fontcdn.ir">
<link rel="preconnect" href="//v1.fontapi.ir">
<link href="https://v1.fontapi.ir/css/Estedad" rel="stylesheet">
<?php
    $connect=mysqli_connect('localhost','root','','hamstershop');
?>
<style>
    *{
        font-family: Estedad, sans-serif;
    }
    .card{
        margin: 5px;
    }
</style>
    <title>همستر فارسی</title>
</head>
<body dir="rtl">
    <center>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <img class="navbar-brand img-circle" src="https://s100.divarcdn.com/static/photo/afra/post/QpfdclBGzM4kRWC91k7-xA/59e5904e-d6bd-4235-9415-b2e77eccbba0.jpg" alt="">
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="#" tabindex="-1" aria-disabled="false"><h2>محصولات</h2></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="mini-body" style="background-image:url(https://motionbgs.com/i/c/364x205/media/3335/topographic-textures.jpg);background-repeat: no-repeat;background-size: cover;">
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
                                <img class="card-img-top" src="'.$row['img'].'" alt="Product">
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
            <div style="min-height: 250vh;"></div>
        </div>
    </center>
</body>
<footer class="bg-dark text-light">
    <center>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2>
                        سایت همستر فارسی
                    </h2>
                </div>
                <div class="col-4">
                    <img class="img-circle" src="https://s100.divarcdn.com/static/photo/afra/post/QpfdclBGzM4kRWC91k7-xA/59e5904e-d6bd-4235-9415-b2e77eccbba0.jpg" alt="Hamster Kombat" width="200">
                </div>
                <div class="col-4">
                    <h2>اول سایت تخصصی خرید و فروش HMSTR در ایران</h2>
                </div>
            </div>
        </div>
        <br><br>
    </center>
</footer>
</html>