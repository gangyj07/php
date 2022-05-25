<?php
  include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>밴드 노래 추천</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
  </head>
  <body class="container">
    <br><br><br><br><br><br><br>
    <form class="form-signin w-25 m-auto text-center" action="index.php" method="post">
        <h1 >로그인</h1>
        <br><br><br>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="userId">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="userPW">
            <label for="floatingInput">Password</label>
          </div>
          <br><br>
          <div class="row align-items">
            <div class="col">
              <button type="button" class="btn btn-outline-dark" onclick="location.href='register.php'">회원가입</button>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-outline-dark">로그인</button>
            </div>
          </div>
    </form> 
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
