<?php
	include 'act-session_start.php';
	include './../conf/connect.php';
	
	$id_guru 	 = $_POST['id_guru'];
	$id_kk	 	 = $_POST['id_kk'];
	$nama_guru 	 = $_POST['nama_guru'];
	$nip	 	 = $_POST['nip'];
	$alamat 	 = $_POST['alamat'];
	$telp	 	 = $_POST['telp'];
	$password 	 = $_POST['password'];
	$password2 	 = $_POST['password2'];
	$level 	  	 = $_POST['level'];


	function back_guru_form(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=guru_form">';}

	if($id_guru==''){
		echo '<script type="text/javascript"> alert ("ID Guru Belum Diisi!"); </script>';
		back_guru_form();}

	else if($id_kk==''){
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Belum Diisi!"); </script>';
		back_guru_form();}

	else if ($id_kk=='ID Komp. Keahlian') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_guru_form();}

	else if($nama_guru==''){
		echo '<script type="text/javascript"> alert ("Nama Guru Belum Diisi!"); </script>';
		back_guru_form();}

	else if($nip==''){
		echo '<script type="text/javascript"> alert ("Nomor Induk Pegawai Belum Diisi!"); </script>';
		back_guru_form();}

	else if($alamat==''){
		echo '<script type="text/javascript"> alert ("Alamat Guru Belum Diisi!"); </script>';
		back_guru_form();}

	else if($telp==''){
		echo '<script type="text/javascript"> alert ("Nomor Telepon Guru Belum Diisi!"); </script>';
		back_guru_form();}

	else if ($password=='') {
		echo '<script type="text/javascript"> alert ("Password Belum Diisi!"); </script>';
		back_guru_form();}

	else if ($password2=='') {
		echo '<script type="text/javascript"> alert ("Ketik Ulang Password!"); </script>';
		back_guru_form();}

	else if ($password!=$password2) {
		echo '<script type="text/javascript"> alert ("Pengetikan Ulang Password Tidak Sama!"); </script>';
		back_guru_form();}

	else{
		if ($password==$password2) {
		mysql_query("INSERT INTO user VALUES('$id_guru', '$nama_guru', '$password', '$level')");		
		
		mysql_query("INSERT INTO guru VALUES('$id_guru', '$id_kk', '$nama_guru', '$nip', '$alamat', '$telp')");		
		echo '<script type="text/javascript"> alert ("Data Guru Berhasil Dimasukan!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin.php?page=guru">';}}
?>