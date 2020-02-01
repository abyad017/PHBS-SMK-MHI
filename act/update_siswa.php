<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_update	 = $_POST['id_update'];
	$nisn		 = $_POST['nisn'];
	$id_kk		 = $_POST['id_kk'];
	$nama_siswa	 = $_POST['nama_siswa'];
	$alamat		 = $_POST['alamat'];
	$tgl_lahir	 = $_POST['tgl_lahir'];
	//$foto		 = $_POST['foto'];	
	$password	 = $_POST['password'];
	$password2	 = $_POST['password2'];	
	$level		 = $_POST['level'];

	function back_siswa(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=siswa">';}

	if ($nisn=='') {
		echo '<script type="text/javascript"> alert ("NISN Tidak Boleh Kosong!"); </script>';
		back_siswa();}

	else if ($id_kk=='') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_siswa();}

	else if ($id_kk=='ID Komp. Keahlian') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_siswa();}

	else if($nama_siswa==''){
		echo '<script type="text/javascript"> alert ("Nama Siswa Tidak Boleh Kosong!"); </script>';
		back_siswa();}

	else if($alamat==''){
		echo '<script type="text/javascript"> alert ("Alamat Siswa Tidak Boleh Kosong!"); </script>';
		back_siswa();}

	else if($tgl_lahir==''){
		echo '<script type="text/javascript"> alert ("Tanggal Lahir Siswa Tidak Boleh Kosong!"); </script>';
		back_siswa();}

	// else if($foto==''){
	// 	echo '<script type="text/javascript"> alert ("Foto Siswa Tidak Boleh Kosong!"); </script>';
	// 	back_siswa();}

	else if ($password=='') {
		echo '<script type="text/javascript"> alert ("Password Belum Diisi!"); </script>';
		back_siswa();}

	else if ($password2=='') {
		echo '<script type="text/javascript"> alert ("Ketik Ulang Password!"); </script>';
		back_siswa();}

	else if ($password!=$password2) {
		echo '<script type="text/javascript"> alert ("Pengetikan Ulang Password Tidak Sama!"); </script>';
		back_siswa();}

	else if($level==''){
		echo '<script type="text/javascript"> alert ("Level Administrator Belum Diisi!"); </script>';
		back_siswa();}

	else{
		if ($password==$password2) {
		mysql_query("UPDATE user SET id_user='$nisn', username='$nama_siswa', password='$password', level='$level' WHERE id_user='$id_update'");
		mysql_query("UPDATE siswa SET nisn='$nisn', id_kk='$id_kk', nama='$nama_siswa', alamat='$alamat', tgl_lahir='$tgl_lahir', foto='$foto' WHERE nisn='$id_update'");
		echo '<script type="text/javascript"> alert ("Data Siswa Berhasil Di-Update!"); </script>';
		back_siswa();}}
?>