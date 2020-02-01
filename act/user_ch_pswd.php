<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_user	 = $_SESSION['id_user'];
	$username	 = $_POST['username'];
	$password	 = $_POST['password'];
	$password2	 = $_POST['password2'];
	$level		 = $_POST['level'];

	function back_user_ch_pswd(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=user_ch_pswd">';}

	if ($username=='') {
		echo '<script type="text/javascript"> alert ("Username Tidak Boleh Kosong!"); </script>';
		back_user_ch_pswd();}

	else if ($password=='') {
		echo '<script type="text/javascript"> alert ("Password Tidak Boleh Kosong!"); </script>';
		back_user_ch_pswd();}

	else if ($password2=='') {
		echo '<script type="text/javascript"> alert ("Password Harus Diketik Ulang!"); </script>';
		back_user_ch_pswd();}

	else if ($password!=$password2) {
		echo '<script type="text/javascript"> alert ("Pengetikan Ulang Password Tidak Sama!"); </script>';
		back_user_ch_pswd();}

	else if($level==''){
		echo '<script type="text/javascript"> alert ("Level User Tidak Boleh Kosong!"); </script>';
		back_user_ch_pswd();}

	else if ($level=='Level Administrator') {
		echo '<script type="text/javascript"> alert ("Level Administrator Tidak Boleh Kosong!"); </script>';
		back_user_ch_pswd();}

	else{
		if ($password==$password2) {
		mysql_query("UPDATE user SET username='$username', password='$password', level='$level' WHERE id_user='$id_user'");
		echo '<script type="text/javascript"> alert ("Data Pengguna Berhasil Di-Update!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin.php?page=user">';}}
?>