<?php

include "../../connect.php";
$date = date('Y-m-d');
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$sql = mq("insert into board(name,pw,title,content,date) values('".$_POST['name']."','".$userpw."','".$_POST['title']."','".$_POST['content']."','".$date."')"); ?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=../board_index.php" />