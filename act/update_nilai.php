<?php
	include 'act-session_start.php';
	include './../conf/connect.php';

	$id_update	 = $_POST['id_update'];
	$nisn 	 	 = $_POST['nisn'];
	$id_guru 	 = $_POST['id_guru'];
	$id_sk	 	 = $_POST['id_sk'];
	$nilai_angka = $_POST['nilai_angka'];

	function back_nilai(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=nilai">';}

	if($nisn==''){
		echo '<script type="text/javascript"> alert ("NISN Murid Tidak Boleh Kosong!"); </script>';
		back_nilai();}

	else if($nisn=='NISN Murid'){
		echo '<script type="text/javascript"> alert ("NISN Murid Tidak Boleh Kosong!"); </script>';
		back_nilai();}

	else if($id_guru==''){
		echo '<script type="text/javascript"> alert ("ID Guru Tidak Boleh Kosong!"); </script>';
		back_nilai();}

	else if($id_sk==''){
		echo '<script type="text/javascript"> alert ("ID Standar Kompetensi Tidak Boleh Kosong!"); </script>';
		back_nilai();}

	else if($id_sk=='ID Standar Komp.'){
		echo '<script type="text/javascript"> alert ("ID Standar Kompetensi Tidak Boleh Kosong!"); </script>';
		back_nilai();}

	else if($nilai_angka==''){
		echo '<script type="text/javascript"> alert ("Nilai Angka Tidak Boleh Kosong!"); </script>';
		back_nilai();}

	else{
		if($nilai_angka <= 50.00)			{ $nilai_huruf = E; }
		else if ($nilai_angka <= 69.00)		{ $nilai_huruf = D; }
		else if ($nilai_angka <= 75.00)		{ $nilai_huruf = C; }
		else if ($nilai_angka <= 85.00)		{ $nilai_huruf = B; }
		else if ($nilai_angka <= 100.00)	{ $nilai_huruf = A; }

		mysql_query("UPDATE nilai SET nisn='$nisn', id_guru='$id_guru', id_sk='$id_sk', nilai_angka='$nilai_angka', nilai_huruf='$nilai_huruf' WHERE no='$id_update'");
		echo '<script type="text/javascript"> alert ("Data Nilai Berhasil Di-Update!"); </script>';
		back_nilai();}
?>