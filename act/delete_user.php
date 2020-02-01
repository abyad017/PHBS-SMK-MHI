<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_delete = $_GET['id_delete'];
	
	mysql_query("DELETE FROM user WHERE id_user='$id_delete'");
	echo '<script type="text/javascript"> alert ("Data Pengguna Berhasil Dihapus!"); </script>';
	echo '<meta http-equiv="refresh" content="0,./../admin.php?page=user">';
?>