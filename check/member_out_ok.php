<?php
	include "../connect.php";
	
	$pw_current = $_POST['user_pw_current'];
	$pw_confirm = $_POST['user_pw_confirm'];
	$pw_hash = $_SESSION['inputpassword'];
	
	if(($pw_current == $pw_confirm) && password_verify($pw_current, $pw_hash)) {

		$sql = mq("delete from user where std_pw = '".$pw_hash."'");
	
		echo "<script>alert('회원탈퇴가 정상적으로 처리되었습니다.');</script>";
		echo "<script>location.href='/index.html';</script>";
	}
	else if($pw_current != $pw_confirm) {
		echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 입력해 주세요.');</script>";
		echo "<script>location.href='/check/member_out.php';</script>";
	}
	else {
		echo "<script>alert('비밀번호가 올바르지 않습니다. 다시 입력해 주세요.');</script>";
		echo "<script>location.href='/check/member_out.php';</script>";
	}
	
?>