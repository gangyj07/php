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
    <table class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col" class="col-1">#</th>
          <th scope="col" class="col-3">제목</th>
         <th scope="col" class="col-7">내용</th>
          <th scope="col" class="col-1">작성자</th>
         </tr>
      </thead>
      <tbody>
        <tr>
         <th scope="row">1</th>
         <td>밴드 타니말라에서 기타를 모집합니다.</td>
          <td>기타 3년차 이상 asdf@gmail.com으로 지원해주시길 바랍니다.</td>
         <td>타니말라 보컬</td>
       </tr>
       <tr>
          <th scope="row">2</th>
          <td>밴드 부활에서 보컬을 모집합니다.</td>
          <td>asdf@naver.com으로 연락 바랍니다.</td>
          <td>박완규</td>
       </tr>
       <tr>
          <th scope="row">3</th>
          <td>title</td>
          <td >text</td>
          <td>name</td>
       </tr>
       <tr>
          <th scope="row">4</th>
          <td>title</td>
          <td >text</td>
          <td>name</td>
       </tr>
       <tr>
          <th scope="row">5</th>
          <td>title</td>
          <td >text</td>
          <td>name</td>
       </tr>
       <tr>
          <th scope="row">6</th>
          <td>title</td>
          <td >text</td>
          <td>name</td>
       </tr>
       <tr>
          <th scope="row">7</th>
          <td>title</td>
          <td >text</td>
          <td>name</td>
       </tr>
       <tr>
          <th scope="row">8</th>
          <td>title</td>
          <td >text</td>
          <td>name</td>
       </tr>
       <tr>
          <th scope="row">9</th>
          <td>title</td>
          <td >text</td>
          <td>name</td>
       </tr>
       <tr>
          <th scope="row">10</th>
          <td>title</td>
          <td >text</td>
          <td>name</td>
       </tr>
      </tbody>
    </table>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
