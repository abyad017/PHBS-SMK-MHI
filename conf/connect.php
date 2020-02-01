<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "dimas2";

$conn = mysql_connect($host, $user, $pass);
if($conn){
	$buka = mysql_select_db($database);
	if(!$buka){die("Database tidak dapat dibuka!");}
	else{echo "";}}
else{die("Server MySQL tidak terhubung!");}
?>