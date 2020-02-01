<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_update	 = $_POST['id_update'];
	$id_kk		 = $_POST['id_kk'];
	$id_diklat	 = $_POST['id_diklat'];
	$nama_kk	 = $_POST['nama_kk'];

	function back_kompetensi_keahlian(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=kompetensi_keahlian">';}

	if ($id_kk=='') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_kompetensi_keahlian();}

	else if ($id_diklat=='') {
		echo '<script type="text/javascript"> alert ("ID DIKLAT Tidak Boleh Kosong!"); </script>';
		back_kompetensi_keahlian();}

	else if ($id_diklat=='ID DIKLAT') {
		echo '<script type="text/javascript"> alert ("ID DIKLAT Tidak Boleh Kosong!"); </script>';
		back_kompetensi_keahlian();}

	else if($nama_kk==''){
		echo '<script type="text/javascript"> alert ("Nama Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_kompetensi_keahlian();}

	else{
		mysql_query("UPDATE kompetensi_keahlian SET id_kk='$id_kk', id_diklat='$id_diklat', nama='$nama_kk' WHERE id_kk='$id_update'");
		echo '<script type="text/javascript"> alert ("Data Kompetensi Keahlian Berhasil Di-Update!"); </script>';
		back_kompetensi_keahlian();}
?>