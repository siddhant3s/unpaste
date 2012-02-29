<?php

require_once("config.php");

$MYSQL_TABLE="unpaste";
  mysql_connect($MYSQL_DB_HOST,$MYSQL_DB_USER,$MYSQL_DB_PASS); 


  mysql_select_db($MYSQL_DB);
if(isset($_POST['text'])){


  $text =  $_POST['text'];
  if(get_magic_quotes_gpc())
    $text=stripslashes($text);
  $hash = md5($text);
  $text = base64_encode($text);
  echo "Checking in Text hash".$hash;

  
  $res=mysql_query("INSERT INTO unpaste (hash, content) VALUES ('$hash', '$text')");
  if($res)
    echo ("INSERT INTO unpaste (hash, content) VALUES ('$hash', '$text')");
  else
    echo mysql_error();
}
else if (isset($_GET['hash']))
  {
    $hash=$_GET['hash'];
    $result = mysql_query("SELECT * FROM unpaste WHERE hash='$hash'");

    if($result)
      {
	$row = mysql_fetch_array($result);
	echo base64_decode($row['content']);
      }
    else{
      header("Status: 404 Not Found"); 
    }
  }
?>