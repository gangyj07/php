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

    <br><br><br><br><br>
    <form class="form-signin w-25 m-auto text-center" action="index.php" method="post">
        <h1 >회원가입</h1>
        <br><br>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="userId">
            <label for="floatingInput">이메일 주소</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="userPW">
            <label for="floatingInput">비밀번호</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password">
            <label for="floatingInput">비밀번호 확인</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="userName">
            <label for="floatingInput">이름</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="NickName" name="userNick">
            <label for="floatingInput">닉네임</label>
        </div>
        
        <br><br>
          
        <button type="button" class="btn btn-outline-dark" onclick="location.href='register.php'">회원가입</button>
            
    </form>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
