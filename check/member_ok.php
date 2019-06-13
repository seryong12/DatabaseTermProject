<?php
	include "../connect.php";
	include "../password.php";

	$userFirstName = $_POST['firstName'];
	$userLastName = $_POST['lastName'];
	$userid = $_POST['id'];
	$userpw = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$useryear = $_POST['mb_1'];
	$usercollege = $_POST['mb_2'];
	$userdept = $_POST['mb_3'];
	
	
	$sql = mq("insert into user (std_last, std_first, std_id, std_pw, std_nickname, std_year, std_college, std_dept) 
			   values('".$userLastName."','".$userFirstName."','".$userid."','".$userpw."','".$username."','".$useryear."','".$usercollege."','".$userdept."')");

?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
