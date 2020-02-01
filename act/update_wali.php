<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_update	 = $_POST['id_update'];
	$id_wali	 = $_POST['id_wali'];
	$nisn		 = $_POST['nisn'];
	$nama_ayah	 = $_POST['nama_ayah'];
	$kerja_ayah	 = $_POST['kerja_ayah'];
	$nama_ibu	 = $_POST['nama_ibu'];
	$kerja_ibu	 = $_POST['kerja_ibu'];
	$alamat		 = $_POST['alamat'];
	$telp		 = $_POST['telp'];	
	$password	 = $_POST['password'];
	$password2	 = $_POST['password2'];	
	$level		 = $_POST['level'];	

	function back_wali(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=wali">';}

	if ($id_wali=='') {
		echo '<script type="text/javascript"> alert ("ID Wali Murid Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else if ($nisn=='') {
		echo '<script type="text/javascript"> alert ("NISN Murid Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else if ($nisn=='NISN Murid') {
		echo '<script type="text/javascript"> alert ("NISN Murid Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else if($nama_ayah==''){
		echo '<script type="text/javascript"> alert ("Nama Ayah Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else if($kerja_ayah==''){
		echo '<script type="text/javascript"> alert ("Pekerjaan Ayah Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else if($nama_ibu==''){
		echo '<script type="text/javascript"> alert ("Nama Ibu Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else if($kerja_ibu==''){
		echo '<script type="text/javascript"> alert ("Pekerjaan Ibu Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else if($alamat==''){
		echo '<script type="text/javascript"> alert ("Alamat Wali Murid Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else if($telp==''){
		echo '<script type="text/javascript"> alert ("Nomor Telepon Wali Murid Tidak Boleh Kosong!"); </script>';
		back_wali();}	

	else if ($password=='') {
		echo '<script type="text/javascript"> alert ("Password Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else if ($password2=='') {
		echo '<script type="text/javascript"> alert ("Password Harus Diketik Ulang!"); </script>';
		back_wali();}

	else if ($password!=$password2) {
		echo '<script type="text/javascript"> alert ("Pengetikan Ulang Password Tidak Sama!"); </script>';
		back_wali();}

	else if($level==''){
		echo '<script type="text/javascript"> alert ("Level Administrator Tidak Boleh Kosong!"); </script>';
		back_wali();}

	else{
		if ($password==$password2) {
		mysql_query("UPDATE user SET id_user='$id_wali', username='$nama_ayah', password='$password', level='$level' WHERE id_user='$id_update'");

		mysql_query("UPDATE wali SET id_wali='$id_wali', nisn='$nisn', nama_ayah='$nama_ayah', pekerjaan_ayah='$kerja_ayah', nama_ibu='$nama_ibu', pekerjaan_ibu='$kerja_ibu', alamat='$alamat', telp='$telp' WHERE id_wali='$id_update'");
		echo '<script type="text/javascript"> alert ("Data Wali Murid Berhasil Di-Update!"); </script>';
		back_wali();}}
?>