<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_update	 = $_POST['id_update'];
	$id_sk		 = $_POST['id_sk'];
	$id_kk		 = $_POST['id_kk'];
	$nama_sk	 = $_POST['nama_sk'];
	$kelas_sk	 = $_POST['kelas_sk'];

	function back_standar_kompetensi(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=standar_kompetensi">';}

	if ($id_sk=='') {
		echo '<script type="text/javascript"> alert ("ID Standar Kompetensi Tidak Boleh Kosong!"); </script>';
		back_standar_kompetensi();}

	else if ($id_kk=='') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_standar_kompetensi();}

	else if ($id_kk=='ID Komp. Keahlian') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_standar_kompetensi();}

	else if($nama_sk==''){
		echo '<script type="text/javascript"> alert ("Nama Standar Kompetensi Tidak Boleh Kosong!"); </script>';
		back_standar_kompetensi();}

	else if($kelas_sk==''){
		echo '<script type="text/javascript"> alert ("Kelas Standar Kompetensi Tidak Boleh Kosong!"); </script>';
		back_standar_kompetensi();}

	else{
		mysql_query("UPDATE standar_kompetensi SET id_sk='$id_sk', id_kk='$id_kk', nama='$nama_sk', kelas='$kelas_sk' WHERE id_sk='$id_update'");
		echo '<script type="text/javascript"> alert ("Data Standar Kompetensi Berhasil Di-Update!"); </script>';
		back_standar_kompetensi();}
?>