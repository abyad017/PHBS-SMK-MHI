<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_update	 = $_POST['id_update'];
	$id_guru	 = $_POST['id_guru'];
	$id_kk		 = $_POST['id_kk'];
	$nama_guru	 = $_POST['nama_guru'];
	$nip		 = $_POST['nip'];
	$alamat		 = $_POST['alamat'];
	$telp		 = $_POST['telp'];
	$password	 = $_POST['password'];
	$password2	 = $_POST['password2'];	
	$level		 = $_POST['level'];

	function back_guru(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=guru">';}

	if ($id_guru=='') {
		echo '<script type="text/javascript"> alert ("ID Guru Tidak Boleh Kosong!"); </script>';
		back_guru();}

	if($id_guru=='ID Guru'){
		echo '<script type="text/javascript"> alert ("ID Guru Tidak Boleh Kosong!"); </script>';
		back_guru();}

	else if ($id_kk=='') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_guru();}

	else if ($id_kk=='ID Komp. Keahlian') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_guru();}

	else if($nama_guru==''){
		echo '<script type="text/javascript"> alert ("Nama guru Tidak Boleh Kosong!"); </script>';
		back_guru();}

	else if($nip==''){
		echo '<script type="text/javascript"> alert ("Nomor Induk Pegawai Tidak Boleh Kosong!"); </script>';
		back_guru();}

	else if($alamat==''){
		echo '<script type="text/javascript"> alert ("Alamat Guru Tidak Boleh Kosong!"); </script>';
		back_guru();}

	else if($telp==''){
		echo '<script type="text/javascript"> alert ("Nomor Telepon Guru Tidak Boleh Kosong!"); </script>';
		back_guru();}

	else if ($password=='') {
		echo '<script type="text/javascript"> alert ("Password Tidak Boleh Kosong!"); </script>';
		back_user();}

	else if ($password2=='') {
		echo '<script type="text/javascript"> alert ("Password Harus Diketik Ulang!"); </script>';
		back_user();}

	else if ($password!=$password2) {
		echo '<script type="text/javascript"> alert ("Pengetikan Ulang Password Tidak Sama!"); </script>';
		back_user();}

	else if($level==''){
		echo '<script type="text/javascript"> alert ("Level Administrator Tidak Boleh Kosong!"); </script>';
		back_user();}

	else{
		if ($password==$password2) {
		mysql_query("UPDATE user SET id_user='$id_guru', username='$nama_guru', password='$password', level='$level' WHERE id_user='$id_update'");

		mysql_query("UPDATE guru SET id_guru='$id_guru', id_kk='$id_kk', nama='$nama_guru', nip='$nip', alamat='$alamat', telp='$telp' WHERE id_guru='$id_update'");
		echo '<script type="text/javascript"> alert ("Data Guru Berhasil Di-Update!"); </script>';
		back_guru();}}
?>