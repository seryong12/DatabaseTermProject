<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Student</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- 부트스트랩 css -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
	  html, body {width:100%; height:100%}
	  
		

		
		
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- 부트스트랩 커스텀 css -->
    <link href="../css/album.css" rel="stylesheet">
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
          <li class="nav-item active">
            <a class="nav-link" href="student.php">Student<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="board_index.php">Notice board</a>
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


<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Graduation Requirements</h1>
      <p class="lead text-muted">각 앨범의 'VIEW' 버튼을 클릭하면 앨범에 맞는 연도의 졸업요건을 볼 수 있습니다. 이 사이트는 그러한 사이트입니다.</p>
      <p>
        <a href="https://kku.ac.kr/user/boardList.do?boardId=1456&siteId=wwwkr&id=wwwkr_010802000000" class="btn btn-primary my-2">직접 요람 보러가기</a>
        <a href="https://kku.ac.kr" class="btn btn-secondary my-2">건국대학교 홈페이지 가기</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

<!--상단 3개의 앨범-->
      <div class="row">
        <div class="col-md-4"><!--상단 맨 왼쪽 앨범-->
          <div class="card mb-4 shadow-sm">
            <svg class="img_body" width="348" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="../img/2019.png" x="0" y="0" height="100%" width="100%"</svg>
            <div class="card-body">
              <p class="card-text"><mark>2019학년도 졸업요건</mark><br>2019학년도의 졸업요건을 볼 수 있는 앨범입니다. 하단의 view 버튼을 눌러 확인하세요.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href='College19.html'">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">class of 23</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4"><!--상단 중간 앨범-->
          <div class="card mb-4 shadow-sm">
            <svg class="img_body" width="348" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="../img/2018.png" x="0" y="0" height="100%" width="100%"></image></svg>
            <div class="card-body">
              <p class="card-text"><mark>2018학년도 졸업요건</mark><br>2018학년도의 졸업요건을 볼 수 있는 앨범입니다. 하단의 view 버튼을 눌러 확인하세요.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"onclick="location.href='College18.html'">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">class of 22</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4"><!-- 상단 맨 오른쪽앨범-->
          <div class="card mb-4 shadow-sm">
                <svg class="img_body" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="../img/2017.png" x="0" y="0" height="100%" width="100%"></image></svg>
            <div class="card-body">
              <p class="card-text"><mark>2017학년도 졸업요건</mark><br>2017학년도의 졸업요건을 볼 수 있는 앨범입니다. 하단의 view 버튼을 눌러 확인하세요.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="location.href='College17.html'">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">class of 21</small>
              </div>
            </div>
          </div>
        </div>

<!--중단 3개의 앨범-->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="img_body" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="../img/2016.png" x="0" y="0" height="100%" width="100%"></image></svg>
            <div class="card-body">
              <p class="card-text"><mark>2016학년도 졸업요건</mark><br>2016학년도의 졸업요건을 볼 수 있는 앨범입니다. 하단의 view 버튼을 눌러 확인하세요.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">class of 20</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="img_body" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="../img/2015.png" x="0" y="0" height="100%" width="100%"></image></svg>
            <div class="card-body">
              <p class="card-text"><mark>2015학년도 졸업요건</mark><br>2015학년도의 졸업요건을 볼 수 있는 앨범입니다. 하단의 view 버튼을 눌러 확인하세요.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">class of 19</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="img_body" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="../img/2014.png" x="0" y="0" height="100%" width="100%"></image></svg>
            <div class="card-body">
              <p class="card-text"><mark>2014학년도 졸업요건</mark><br>2014학년도의 졸업요건을 볼 수 있는 앨범입니다. 하단의 view 버튼을 눌러 확인하세요.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">class of 18</small>
              </div>
            </div>
          </div>
        </div>

<!--하단 3개의 앨범-->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="img_body" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="../img/2013.png" x="0" y="0" height="100%" width="100%"></image></svg>
            <div class="card-body">
              <p class="card-text"><mark>2013학년도 졸업요건</mark><br>2013학년도의 졸업요건을 볼 수 있는 앨범입니다. 하단의 view 버튼을 눌러 확인하세요.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">class of 17</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="img_body" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="../img/2012.png" x="0" y="0" height="100%" width="100%"></image></svg>
            <div class="card-body">
              <p class="card-text"><mark>2012학년도 졸업요건</mark><br>2012학년도의 졸업요건을 볼 수 있는 앨범입니다. 하단의 view 버튼을 눌러 확인하세요.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">class of 16</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="img_body" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="../img/2011.png" x="0" y="0" height="100%" width="100%"></image></svg>
            <div class="card-body">
              <p class="card-text"><mark>2011학년도 졸업요건</mark><br>2011학년도의 졸업요건을 볼 수 있는 앨범입니다. 하단의 view 버튼을 눌러 확인하세요.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">class of 15</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&middot 2019.05.01-2019.06.03 Konkuk Glocal University</p>
  </footer>
</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>