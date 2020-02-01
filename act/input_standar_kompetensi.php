<?php
	include 'act-session_start.php';
	include './../conf/connect.php';
	
	$id_sk	 	 = $_POST['id_sk'];
	$id_kk	 	 = $_POST['id_kk'];
	$nama_sk 	 = $_POST['nama_sk'];
	$kelas_sk 	 = $_POST['kelas_sk'];

	function back_standar_kompetensi_form(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=standar_kompetensi_form">';}

	if($id_sk==''){
		echo '<script type="text/javascript"> alert ("ID Standar Kompetensi Belum Diisi!"); </script>';
		back_standar_kompetensi_form();}

	else if($id_kk==''){
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Belum Diisi!"); </script>';
		back_standar_kompetensi_form();}

	else if ($id_kk=='ID Komp. Keahlian') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_standar_kompetensi_form();}

	else if($nama_sk==''){
		echo '<script type="text/javascript"> alert ("Nama Standar Kompetensi Belum Diisi!"); </script>';
		back_standar_kompetensi_form();}

	else if($kelas_sk==''){
		echo '<script type="text/javascript"> alert ("Kelas Standar Kompetensi Belum Diisi!"); </script>';
		back_standar_kompetensi_form();}

	else{
		mysql_query("INSERT INTO standar_kompetensi VALUES('$id_sk', '$id_kk', '$nama_sk', '$kelas_sk')");
		echo '<script type="text/javascript"> alert ("Data Standar Kompetensi Berhasil Dimasukan!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin.php?page=standar_kompetensi">';}
?>