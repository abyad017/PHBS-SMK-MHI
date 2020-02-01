<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_user 	 = $_POST['id_user'];
	$username	 = $_POST['username'];
	$password 	 = $_POST['password'];
	$password2 	 = $_POST['password2'];
	$level 	 	 = $_POST['level'];

	function back_user_form(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=user_form">';}

	if($id_user==''){
		echo '<script type="text/javascript"> alert ("ID User Belum Diisi!"); </script>';
		back_user_form();}

	else if($username==''){
		echo '<script type="text/javascript"> alert ("Username Belum Diisi!"); </script>';
		back_user_form();}

	else if ($password=='') {
		echo '<script type="text/javascript"> alert ("Password Belum Diisi!"); </script>';
		back_user_form();}

	else if ($password2=='') {
		echo '<script type="text/javascript"> alert ("Ketik Ulang Password!"); </script>';
		back_user_form();}

	else if ($password!=$password2) {
		echo '<script type="text/javascript"> alert ("Pengetikan Ulang Password Tidak Sama!"); </script>';
		back_user_form();}

	else if($level=='Level Administrator'){
		echo '<script type="text/javascript"> alert ("Level Administrator Tidak Boleh Kosong!"); </script>';
		back_user_form();}

	else if($level==''){
		echo '<script type="text/javascript"> alert ("Level Administrator Belum Diisi!"); </script>';
		back_user_form();}

	else{
		if ($password==$password2) {
		mysql_query("INSERT INTO user VALUES('$id_user', '$username', '$password', '$level')");
		echo '<script type="text/javascript"> alert ("Data Pengguna Berhasil Dimasukan!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin.php?page=user">';}}
?>