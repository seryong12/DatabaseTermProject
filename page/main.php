<!doctype html>
<?php include "../connect.php"; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <!-- 부트스트랩 css -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" >


    <style>
	
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

    <!-- 적용된 부트스트랩 템플릿 css -->
    <link href="https://getbootstrap.com/docs/4.3/examples/carousel/carousel.css" rel="stylesheet">
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
        <li class="nav-item active">
          <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="student.php">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="board_index.php">Notice Board</a>
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

<main role="main"><!--중간 슬라이드-->

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <!--첫번째슬라이드-->
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><img src="../img/main_bg.png" ><rect width="100%" height="100%" fill="#777"/><!--svg안에서 사각형만드는 rect--></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Showing Graduation requirements</h1>
            <p>Thank you for visiting our site.<br>
             Three students in the computer engineering department made this site.</p>
            <p><a class="btn btn-lg btn-primary" href="https://cs.kku.ac.kr" role="button">Cs.kku.ac.kr</a></p>
          </div>
        </div>
      </div>
    </div>



  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">

  <!--첫번째 특징-->

    <div class="row featurette">
        <span><h2 class="featurette-heading">Welcome,<?php
	if(isset($_SESSION['inputid'])){
		echo "  {$_SESSION['username']}!";
	}
	?></h2> 	
	

        <p class="lead">We're glad for visiting our WebSite!<br> You can check your graduation requirements easily.<br>
Please scroll down.</p>
	</span>
    </div>
	
	<hr class="featurette-divider">
	
	<!--두번째 특징-->

    <div class="row featurette">
        <span><h2 class="featurette-heading">Your Admission year is <?php echo "{$_SESSION['useryear']}!"; ?> & <br>Your Department is <?php echo "{$_SESSION['userdept']}"; ?> </h3>
        <p class="lead">If you want to know your graduation requirement, tap this button below.
    </span></br><br>
		<a class="btn btn-secondary" href="<?php echo $_SESSION['useryear'] ?>_<?php echo $_SESSION['userdept'] ?>.html" role="button">View &raquo;</a></p>
	</div>
	<hr class="featurette-divider">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <!--첫번째 칼럼-->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><image xlink:href="../img/bonobono.jpg" x="0" y="0" height="150px" width="150px"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg><pre> </pre>
        <h2>LEEJUNSEUNG</h2>
        <p><mark>컴퓨터공학과 17학번</mark><br>헛소리 하지마 임마</p>
        <p><a class="btn btn-secondary" href="https://www.youtube.com/watch?v=4meurGv6-QU" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <!--두번째칼럼-->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><image xlink:href="../img/sobyeongmin.png" x="0" y="0" height="140px" width="155px"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg><pre> </pre>
        <h2>SOBYUNGMIN</h2>
        <p><mark>컴퓨터공학과 17학번</mark><br>고양이를 좋아합니다.</p>
        <p><a class="btn btn-secondary" href="https://www.youtube.com/channel/UCCb6W2FU1L7j9mw14YK-9yg" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <!--세번째칼럼-->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><image xlink:href="../img/primary.jpg" x="0" y="0" height="150px" width="150px"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg><pre> </pre>
        <h2>OHSERYONG</h2>
        <p><mark>컴퓨터공학과 16학번</mark><br>???</p>
        <p><a class="btn btn-secondary" href="https://www.youtube.com/watch?v=yKxL_NnSNjI" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
	

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
<!-- 댓글달아라~ -->
<!--<div id="disqus_thread"></div>

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://term-project.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
-->



  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&middot 2019.05.01-2019.06.03 Konkuk Glocal University</p>
  </footer>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>