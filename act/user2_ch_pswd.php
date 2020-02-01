<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_user	 = $_SESSION['id_user'];
	$username	 = $_POST['username'];
	$password	 = $_POST['password'];
	$password2	 = $_POST['password2'];

	function back_user2_ch_pswd(){echo '<meta http-equiv="refresh" content="0,./../admin_g.php?page=user2_ch_pswd">';}

	if ($username=='') {
		echo '<script type="text/javascript"> alert ("Username Tidak Boleh Kosong!"); </script>';
		back_user2_ch_pswd();}

	else if ($password=='') {
		echo '<script type="text/javascript"> alert ("Password Tidak Boleh Kosong!"); </script>';
		back_user2_ch_pswd();}

	else if ($password2=='') {
		echo '<script type="text/javascript"> alert ("Password Harus Diketik Ulang!"); </script>';
		back_user2_ch_pswd();}

	else if ($password != $password2) {
		echo '<script type="text/javascript"> alert ("Pengetikan Ulang Password Tidak Sama!"); </script>';
		back_user2_ch_pswd();}

	else{
		if ($password==$password2) {
			mysql_query("UPDATE user SET username='$username', password='$password' WHERE id_user='$id_user'");
			echo '<script type="text/javascript"> alert ("Data Pengguna Berhasil Di-Update!"); </script>';
			echo '<meta http-equiv="refresh" content="0,./../admin_g.php">';}}
?>