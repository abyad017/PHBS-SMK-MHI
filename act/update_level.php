<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_update	 = $_POST['id_update'];
	$level	 	 = $_POST['level'];

	function back_level(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=level">';}

	if ($level=='') {
		echo '<script type="text/javascript"> alert ("Level Administrator Tidak Boleh Kosong!"); </script>';
		back_level();}

	else{
		mysql_query("UPDATE level_user SET level='$level' WHERE level='$id_update'");
		echo '<script type="text/javascript"> alert ("Data Level Administrator Berhasil Di-Update!"); </script>';
		back_level();}
?>