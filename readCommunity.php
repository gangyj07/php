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
    <br><br><br>
    <div style="border: 10px solid black; min-height:500px">
      <p style="font-size:30px"><?php echo $_GET["title"]; ?></p>
      <hr style="border:solid 1px black">
      <p style="font-size:17px"><?php echo $_GET["text"]; ?></p>
    </div>
    <button class="float-end" onclick="location.href='writeCommunity.php'">수정</button>
    <br><br>
    <div style="border: 8px solid black; min-height:500px">
      <form style=" margin-top:10px;">
        <span style="font-size:15px; margin-left:10px">댓글</span>
        <input type="text" style="margin-left:10px">
      </form>
      <hr style="border:solid 1px black">
      <p style="font-size:13px">댓글</p>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
