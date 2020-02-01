<?php
	include 'act-session_start.php';	
	include './../conf/connect.php';
	
	$id_diklat	 = $_POST['id_diklat'];
	$nama_diklat = $_POST['nama_diklat'];

	function back_diklat_form(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=diklat_form">';}

	if($id_diklat==''){
		echo '<script type="text/javascript"> alert ("ID DIKLAT Belum Diisi!"); </script>';
		back_diklat_form();}

	else if($nama_diklat==''){
		echo '<script type="text/javascript"> alert ("Nama DIKLAT Belum Diisi!"); </script>';
		back_diklat_form();}

	else{
		mysql_query("INSERT INTO mata_diklat VALUES('$id_diklat', '$nama_diklat')");
		echo '<script type="text/javascript"> alert ("Data DIKLAT Berhasil Dimasukan!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin.php?page=diklat">';}
?>