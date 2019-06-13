<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Member_out</title>

    <link rel="stylesheet" href= "../css/index.css">
    <!-- 부트스트랩 css -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- 부트스트랩 js-->
    <script src="../js/bootstrap.min.js"></script>
    <!-- 적용된 부트스트랩 템플릿 css -->
    <link href="https://getbootstrap.com/docs/4.3/examples/carousel/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href= "./css/index.css">

</head>
<body>
<header><!--맨 위 네비게이션 바-->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
    <a class="navbar-brand" href="https://kku.ac.kr">KONKUK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../page/main.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../page/student.php">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../page/board_index.php">Notice board</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="member_out.php">Withdrawl <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>
<form method="post" action="../check/member_out_ok.php" class="form-signin">
<h1 class="h3 mb-3 font-weight-normal"><p align="center">회원탈퇴</p></h1>
    <input type="password" size="35" name="user_pw_current" class="form-control" placeholder="현재 비밀번호" required autofocus>
    <input type="password" size="35" name="user_pw_confirm" class="form-control" placeholder="비밀번호 재확인" required>
    <button class="btn btn-lg btn-danger btn-block" type="submit" size="35" name="submit" value="확인" placeholder="확인">Withdrawl</button>
</form>

</body>
</html>