<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');
    include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>밴드 노래 추천</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <style>

  </style>
</head>

<body class="container">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <br><br>
  <div class="row align-items-start">
    <div class="col-2">
      추천곡
      <table class="table">
        <thead>
          <tr>
            <th scope="col">노래</th>
            <th scope="col" colspan="2">가수</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2">맛있는 술</td>
            <td>혁오</td>
          </tr>
          <tr>
            <td colspan="2">좋은밤 좋은꿈</td>
            <td>너드커넥션</td>
          </tr>
          <tr>
            <td colspan="2">고백</td>
            <td>델리스파이스</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-7">
      <p style="margin-left:30px; font-size:20px">커뮤니티</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="ms-2 me-auto" onclick="location.href='readCommunity.php?title=커뮤니티 게시글 제목입니다.&text=본문내용입니다.';">
            <div class="fw-bold">커뮤니티 게시글 제목 입니다.</div>
            게시글 내용입니다.
          </div>
        </li>
        <li class="list-group-item">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div>
        </li>
        <li class="list-group-item">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div>
        </li>
        <li class="list-group-item">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div>
        </li>
        <li class="list-group-item">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div>
        </li>
      </ul>
      <hr>
      <br>
      <p style="margin-left:30px; font-size:20px">사람모집</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div>
        </li>
        <li class="list-group-item">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div>
        </li>
        <li class="list-group-item">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div>
        </li>
        <li class="list-group-item">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div>
        </li>
        <li class="list-group-item">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div>
        </li>
      </ul>
    </div>
    <div class="col-3">
      <p style="font-size:20px">콘서트</p>
      <div class="card" style="width: 18rem;">
        <img src="src/img/cardtest1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">쏜애플</h5>
          <p class="card-text">넓은 밤 / 낯선 열대 / 플랑크톤 (Nightwalk / Strange Tropics / Plankton) '석류의 맛' Live ver.
            2022. 03. 18. @삼각산 정법사</p>
          <a href="ShowConcertInfo.php" class="btn btn-primary">자세히보기</a>
        </div>
      </div>
      <br><br>
      <p style="font-size:20px">버스킹</p>
      <div class="card" style="width: 18rem;">
        <img src="src/img/cardtest2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">팀노바</h5>
          <p class="card-text">2022년 6월 15일 남성역앞에서 버스킹합니다!!</p>
          <a href="#" class="btn btn-primary">자세히보기</a>
        </div>
      </div>
    </div>
    <footer>
      <button
      onclick="location.href='test/php/testindex.php'">
        테스트용 버튼 입니다.
      </button>
    </footer>
</body>

</html>