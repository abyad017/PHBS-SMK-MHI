<?php
	include 'act-session_start.php';
	include './../conf/connect.php';
	
	$id_wali 	 = $_POST['id_wali'];
	$nisn	 	 = $_POST['nisn'];
	$nama_ayah 	 = $_POST['nama_ayah'];
	$kerja_ayah	 = $_POST['kerja_ayah'];
	$nama_ibu 	 = $_POST['nama_ibu'];
	$kerja_ibu	 = $_POST['kerja_ibu'];
	$alamat 	 = $_POST['alamat'];
	$telp	 	 = $_POST['telp'];
	$password 	 = $_POST['password'];
	$password2 	 = $_POST['password2'];
	$level 	  	 = $_POST['level'];

	function back_wali_form(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=wali_form">';}

	if($id_wali==''){
		echo '<script type="text/javascript"> alert ("ID Wali Murid Belum Diisi!"); </script>';
		back_wali_form();}

	else if($nisn==''){
		echo '<script type="text/javascript"> alert ("NISN Murid Belum Diisi!"); </script>';
		back_wali_form();}

	else if ($nisn=='NISN Murid'){
		echo '<script type="text/javascript"> alert ("NISN Murid Tidak Boleh Kosong!"); </script>';
		back_wali_form();}

	else if($nama_ayah==''){
		echo '<script type="text/javascript"> alert ("Nama Ayah Belum Diisi!"); </script>';
		back_wali_form();}

	else if($kerja_ayah==''){
		echo '<script type="text/javascript"> alert ("Pekerjaan Ayah Belum Diisi!"); </script>';
		back_wali_form();}

	else if($nama_ibu==''){
		echo '<script type="text/javascript"> alert ("Nama Ibu Belum Diisi!"); </script>';
		back_wali_form();}

	else if($kerja_ibu==''){
		echo '<script type="text/javascript"> alert ("Pekerjaan Ibu Belum Diisi!"); </script>';
		back_wali_form();}

	else if($alamat==''){
		echo '<script type="text/javascript"> alert ("Alamat Wali Murid Belum Diisi!"); </script>';
		back_wali_form();}

	else if($telp==''){
		echo '<script type="text/javascript"> alert ("Nomor Telepon Wali Murid Belum Diisi!"); </script>';
		back_wali_form();}

	else if ($password=='') {
		echo '<script type="text/javascript"> alert ("Password Belum Diisi!"); </script>';
		back_wali_form();}

	else if ($password2=='') {
		echo '<script type="text/javascript"> alert ("Ketik Ulang Password!"); </script>';
		back_wali_form();}

	else if ($password!=$password2) {
		echo '<script type="text/javascript"> alert ("Pengetikan Ulang Password Tidak Sama!"); </script>';
		back_wali_form();}

	else{
		if ($password==$password2) {
		mysql_query("INSERT INTO user VALUES('$id_wali', '$nama_ayah', '$password', '$level')");

		mysql_query("INSERT INTO wali VALUES('$id_wali', '$nisn', '$nama_ayah', '$kerja_ayah','$nama_ibu', '$kerja_ibu', '$alamat', '$telp')");
		echo '<script type="text/javascript"> alert ("Data Wali Murid Berhasil Dimasukan!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin.php?page=wali">';}}
?>