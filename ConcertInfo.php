<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');
    include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";
    $base=new Navbar;
    $base->navbarMain();
    $base->a();
    $base->b();

    include $_SERVER["DOCUMENT_ROOT"]."/inc/ConcertInfoTest.php";
    $base2=new test;
    $base2->Ctest();
    $base2->Ctest();
    $base2->Ctest();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    </head>
    <body class="container">
        <br><br>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>