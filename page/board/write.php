<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\css\style.css" />
<link rel="stylesheet" type="text/css" href="center.css" />
<!-- 부트스트랩 메인 css -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <a class="nav-link" href="main.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="student.php">Student</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="board_index.php">Notice board<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../check/member_out.php">Withdrawl</a>
          </li>
		  <li class="nav-item">
          <a class="nav-link" href="../check/logout.php">LogOut</a>
        </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>

    <div id="board_write" class="layer">

        <h1><a href="../board_index.php" class="text-info">자유게시판</a></h1>
        <h4>글을 작성하는 공간입니다.</h4>
            <div id="write_area">
                <form action="write_ok.php" method="post">
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="66" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <textarea name="name" id="uname" rows="1" cols="66" placeholder="글쓴이" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" cols="66" placeholder="내용" required></textarea>
                    </div>
                    <div id="in_pw">
                        <input type="password" name="pw" id="upw" size="66" placeholder="비밀번호" required />
                    </div>
                    <br>
                    <div class="bt_se">
                        <button class="btn btn-info btn-lg btn-block" type="submit">글 작성</button>
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>