 <?php
  session_start();
  
  $db = new mysqli("localhost","root","sbm327039","termproject");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>