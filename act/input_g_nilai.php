<?php
	include 'act-session_start.php';
	include './../conf/connect.php';
	
	$no 		 = $_POST['no'];
	$nisn 	 	 = $_POST['nisn'];
	$id_guru 	 = $_POST['id_guru'];
	$id_sk	 	 = $_POST['id_sk'];
	$nilai_angka = $_POST['nilai_angka'];

	function back_g_nilai_form(){echo '<meta http-equiv="refresh" content="0,./../admin_g.php?page=g_nilai_form">';}

	if($nisn==''){
		echo '<script type="text/javascript"> alert ("NISN Murid Belum Diisi!"); </script>';
		back_g_nilai_form();}

	else if($nisn=='NISN Murid'){
		echo '<script type="text/javascript"> alert ("NISN Murid Tidak Boleh Kosong!"); </script>';
		back_g_nilai_form();}

	else if($id_guru==''){
		echo '<script type="text/javascript"> alert ("ID Guru Belum Diisi!"); </script>';
		back_g_nilai_form();}

	else if($id_sk==''){
		echo '<script type="text/javascript"> alert ("ID Standar Kompetensi Belum Diisi!"); </script>';
		back_g_nilai_form();}

	else if($id_sk=='ID Standar Komp.'){
		echo '<script type="text/javascript"> alert ("ID Standar Kompetensi Tidak Boleh Kosong!"); </script>';
		back_g_nilai_form();}

	else if($nilai_angka==''){
		echo '<script type="text/javascript"> alert ("Nilai Angka Belum Diisi!"); </script>';
		back_g_nilai_form();}

	else{
		if($nilai_angka <= 50.00)			{ $nilai_huruf = E; }
		else if ($nilai_angka <= 69.00)		{ $nilai_huruf = D; }
		else if ($nilai_angka <= 75.00)		{ $nilai_huruf = C; }
		else if ($nilai_angka <= 85.00)		{ $nilai_huruf = B; }
		else if ($nilai_angka <= 100.00)	{ $nilai_huruf = A; }

		mysql_query("INSERT INTO nilai VALUES('$no', '$nisn', '$id_guru', '$id_sk', '$nilai_angka','$nilai_huruf')");
		echo '<script type="text/javascript"> alert ("Data Nilai Berhasil Dimasukan!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin_g.php?page=g_nilai">';}
?>