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
            onclick="location.href='testlogin.php'"
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
      <form action="login.php" method="get">
    <div class="col-7">
        커뮤니티
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="ms-2 me-auto" type="submit">
              <div class="fw-bold">커뮤니티 게시글 제목 입니다.</div>
              게시글 내용입니다.
            </div>
          </li>
          <li class="list-group-item">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div></li>
          <li class="list-group-item">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div></li>
          <li class="list-group-item">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div></li>
          <li class="list-group-item"><div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div></li>
        </ul>
        <br><br>
        사람모집
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
          </div></li>
          <li class="list-group-item">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div></li>
          <li class="list-group-item">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div></li>
          <li class="list-group-item"><div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Content for list item
          </div></li>
        </ul>
      </div>
      </form>
      <div class="col-3">
        홍보글
        <div class="card" style="width: 18rem;">
          <img src="cardtest1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">쏜애플</h5>
            <p class="card-text">넓은 밤 / 낯선 열대 / 플랑크톤 (Nightwalk / Strange Tropics / Plankton) '석류의 맛' Live ver.
              2022. 03. 18. @삼각산 정법사</p>
            <a href="#" class="btn btn-primary">자세히보기</a>
          </div>
        </div>
        <br><br>
        <div class="card" style="width: 18rem;">
          <img src="cardtest1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">쏜애플</h5>
            <p class="card-text">넓은 밤 / 낯선 열대 / 플랑크톤 (Nightwalk / Strange Tropics / Plankton) '석류의 맛' Live ver.
              2022. 03. 18. @삼각산 정법사</p>
            <a href="#" class="btn btn-primary">자세히보기</a>
          </div>
        </div>
      </div>
  </body>
</html>
