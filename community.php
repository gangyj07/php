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
              <a class="nav-link" href="community.php">사람 모집</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="community.php">홍보</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="community.php">밴드</a>
            </li>
          </ul>
          <button type="button" class="btn btn-outline-success" onclick="console.log('asdfasdf')">로그인</button>
        </div>
      </div>
    </nav>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    <br><br>
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
         <td>혁오는 진짜 전설이다</td>
          <td>아카라카 라이브봤냐? ㄹㅇ 레전드</td>
         <td>청설기</td>
       </tr>
       <tr>
          <th scope="row">2</th>
          <td>설</td>
          <td>아는사람?</td>
          <td>syera</td>
       </tr>
       <tr>
          <th scope="row">3</th>
          <td>윤도현 라이브 갔다온 후기</td>
          <td >개꿀잼임</td>
          <td>않이</td>
       </tr>
       <tr>
          <th scope="row">4</th>
          <td>윤도현 라이브 갔다온 후기</td>
          <td >개꿀잼임</td>
          <td>않이</td>
       </tr>
       <tr>
          <th scope="row">5</th>
          <td>윤도현 라이브 갔다온 후기</td>
          <td >개꿀잼임</td>
          <td>않이</td>
       </tr>
       <tr>
          <th scope="row">6</th>
          <td>윤도현 라이브 갔다온 후기</td>
          <td >개꿀잼임</td>
          <td>않이</td>
       </tr>
       <tr>
          <th scope="row">7</th>
          <td>윤도현 라이브 갔다온 후기</td>
          <td >개꿀잼임</td>
          <td>않이</td>
       </tr>
       <tr>
          <th scope="row">8</th>
          <td>윤도현 라이브 갔다온 후기</td>
          <td >개꿀잼임</td>
          <td>않이</td>
       </tr>
       <tr>
          <th scope="row">9</th>
          <td>윤도현 라이브 갔다온 후기</td>
          <td >개꿀잼임</td>
          <td>않이</td>
       </tr>
       <tr>
          <th scope="row">10</th>
          <td>윤도현 라이브 갔다온 후기</td>
          <td >개꿀잼임</td>
          <td>않이</td>
       </tr>
      </tbody>
    </table>
    <div class="bg-light clearfix">
      <button type="button" class="btn btn-outline-success">Success</button>
      <button type="button" class="btn btn-outline-success pull-right">Success</button>
    </div>
    <button onclick="location.href='writeCommunity.php'">글쓰기</button>
    
  </body>
</html>
