<?php
	include 'act-session_start.php';	
	include './../conf/connect.php';
	
	$level	 = $_POST['level'];

	function back_level_form(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=level_form">';}

	if($level==''){
		echo '<script type="text/javascript"> alert ("Level Administrator Belum Diisi!"); </script>';
		back_level_form();}

	else{
		mysql_query("INSERT INTO level_user VALUES('$level')");
		echo '<script type="text/javascript"> alert ("Data Level Administrator Berhasil Dimasukan!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin.php?page=level">';}
?>