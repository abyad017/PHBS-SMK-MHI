<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_update	 = $_POST['id_update'];
	$id_diklat	 = $_POST['id_diklat'];
	$nama_diklat = $_POST['nama_diklat'];

	function back_diklat(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=diklat">';}

	if ($id_diklat=='') {
		echo '<script type="text/javascript"> alert ("ID DIKLAT Tidak Boleh Kosong!"); </script>';
		back_diklat();}

	else if($nama_diklat==''){
		echo '<script type="text/javascript"> alert ("Nama DIKLAT Tidak Boleh Kosong!"); </script>';
		back_diklat();}

	else{
		mysql_query("UPDATE mata_diklat SET id_diklat='$id_diklat', nama='$nama_diklat' WHERE id_diklat='$id_update'");
		echo '<script type="text/javascript"> alert ("Data DIKLAT Berhasil Di-Update!"); </script>';
		back_diklat();}
?>