<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">밴드 커뮤니티</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="recommend.php">추천 밴드</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="community.php">커뮤니티</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="사람모집.php">사람 모집</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">버스킹,콘서트</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="홍보.php">캘린더</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="ConcertInfo.php">정보</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="band.php">내 밴드</a>
                    </li>
                </ul>
<?php
    if(!isset($_POST["userId"])){
        echo "<button
        type='button' 
        class='btn btn-outline-success' ";
        echo "onclick=";
        echo "location.href='login.php'>";
        echo "
        로그인
      </button>";
    }else {
        echo $_POST["userId"]."님";
    }
?>
            </div>
        </div>
    </nav>
</header>