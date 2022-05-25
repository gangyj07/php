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
    <style>
      .setCenter{
        display: table;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
  </head>
  <body class="container">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">밴드 커뮤니티</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="recommend.php"
                >추천 밴드</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="community.php">커뮤니티</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="사람모집.php">사람 모집</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="홍보.php">홍보</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="community.php">밴드</a>
            </li>
          </ul>
          <button
            type="button"
            class="btn btn-outline-success"
            onclick="location.href='login.php'"
          >
            로그인
          </button>
        </div>
      </div>
    </nav>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <br><br><br><br>
    <div class="clearfix setCenter">
      <figure class="figure float">
        <img src="greenday.jpg" class="figure-img img-fluid rounded" alt="...">
      </figure>
      <h1 class="setCenter">greenday</h1>
    </div>
    <br>
    <form>
      <div class="row">
        <p style="font-size:20px; font-weight:bold">밴드 정보</p>
        <input type="text" style="margin-left:20px;" value=<?php echo $_GET["bandInfo"]; ?>>
        <br><hr style="margin-top:10px">
        <p style="font-size:20px; font-weight:bold">멤버 정보</p>
        <span style="font-weight:bold; font-size:17px">보컬 </span>
        <input type="text" style="margin-left:20px; " value=<?php echo $_GET["vocal"]; ?>>
        <p></p><br>
        <span style="font-weight:bold; font-size:17px">기타 </span>
        <input type="text" style="margin-left:20px; " value=<?php echo $_GET["guitar"]; ?>>
        <p></p>
        <span style="font-weight:bold; font-size:17px">베이스 </span>
        <input type="text" style="margin-left:20px; " value=<?php echo $_GET["bass"]; ?>>
        <p></p>
        <span style="font-weight:bold; font-size:17px">드럼</span>
        <input type="text" style="margin-left:20px; " value=<?php echo $_GET["drum"]; ?>>
        <p></p>
        <span style="font-weight:bold; font-size:17px">다른 세션 </span>
        <input type="text" style="margin-left:20px; " value=<?php echo $_GET["otherSession"]; ?>>
      </div>
    </form>
    <button class="float-end btn btn-outline-dark" style="margin-top:10px">수정하기</button>
    <br><br><br><br>
  </body>
</html>
