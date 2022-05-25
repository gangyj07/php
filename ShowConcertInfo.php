<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');
    include $_SERVER["DOCUMENT_ROOT"]."/inc/navbar.php";
    $base=new Navbar;
    $base->navbarMain();
    $base->a();
    $base->b();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            .carousel .carousel-inner {
             height: 300px;
            }.carousel-item img {
             position: absolute;
             object-fit:cover;
             top: 0;
             left: 0;
             min-height: 300px;
            }
            .setCenter{
             display: table;
             margin-left: auto;
             margin-right: auto;
            }
        </style>
    </head>

    <body class="container">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <br><br>
        <div class="row">
            <div style="width:500px; height:300px;" class="col-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="cardtest1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="cardtest2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                           <img src="greenday.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-7">
                <br><br>
                <p style="font-size:25px; font-weight:bold">밴드: </p>
                <p style="font-size:25px; font-weight:bold">장소: </p>
                <p style="font-size:25px; font-weight:bold">공연기간: </p>
                <p style="font-size:25px; font-weight:bold">공연시간: </p>
            </div>
        </div>
        <br><br>
        <div>
            <p>공연 정보</p>
        </div>
    </body>
</html>