<?php
	include "../connect.php";
	echo "<script>alert('로그아웃되었습니다.'); location.href='/index.html';</script>";
	session_destroy();
	
	
?>
<meta charset="utf-8">
