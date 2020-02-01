<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_kk	 	 = $_POST['id_kk'];
	$id_diklat	 = $_POST['id_diklat'];
	$nama_kk 	 = $_POST['nama_kk'];

	function back_kompetensi_keahlian_form(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=kompetensi_keahlian_form">';}

	if($id_kk==''){
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Belum Diisi!"); </script>';
		back_kompetensi_keahlian_form();}

	else if($id_diklat==''){
		echo '<script type="text/javascript"> alert ("ID DIKLAT Belum Diisi!"); </script>';
		back_kompetensi_keahlian_form();}

	else if ($id_diklat=='ID DIKLAT') {
		echo '<script type="text/javascript"> alert ("ID DIKLAT Tidak Boleh Kosong!"); </script>';
		back_kompetensi_keahlian_form();}

	else if($nama_kk==''){
		echo '<script type="text/javascript"> alert ("Nama Kompetensi Keahlian Belum Diisi!"); </script>';
		back_kompetensi_keahlian_form();}

	else{
		mysql_query("INSERT INTO kompetensi_keahlian VALUES('$id_kk', '$id_diklat', '$nama_kk')");
		echo '<script type="text/javascript"> alert ("Data Kompetensi Keahlian Berhasil Dimasukan!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin.php?page=kompetensi_keahlian">';}
?>