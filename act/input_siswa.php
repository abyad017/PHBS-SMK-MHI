<?php
	include 'act-session_start.php';
	include './../conf/connect.php';
	
	$nisn	 	 = $_POST['nisn'];
	$id_kk	 	 = $_POST['id_kk'];
	$nama_siswa  = $_POST['nama_siswa'];
	$alamat	 	 = $_POST['alamat'];
	$tgl_lahir 	 = $_POST['tgl_lahir'];
	$foto	 	 = $_POST['foto'];
	$password 	 = $_POST['password'];
	$password2 	 = $_POST['password2'];
	$level 	 	 = $_POST['level'];

	function back_siswa_form(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=siswa_form">';}

	if($nisn==''){
		echo '<script type="text/javascript"> alert ("NISN Belum Diisi!"); </script>';
		back_siswa_form();}

	else if($id_kk==''){
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Belum Diisi!"); </script>';
		back_siswa_form();}

	else if ($id_kk=='ID Komp. Keahlian') {
		echo '<script type="text/javascript"> alert ("ID Kompetensi Keahlian Tidak Boleh Kosong!"); </script>';
		back_siswa_form();}

	else if($nama_siswa==''){
		echo '<script type="text/javascript"> alert ("Nama Siswa Belum Diisi!"); </script>';
		back_siswa_form();}

	else if($alamat==''){
		echo '<script type="text/javascript"> alert ("Alamat Siswa Belum Diisi!"); </script>';
		back_siswa_form();}

	else if($tgl_lahir==''){
		echo '<script type="text/javascript"> alert ("Tanggal Lahir Siswa Belum Diisi!"); </script>';
		back_siswa_form();}

	// else if($foto==''){
	// 	echo '<script type="text/javascript"> alert ("Foto Belum Dipilih!"); </script>';
	// 	back_siswa_form();}

	else if ($password=='') {
		echo '<script type="text/javascript"> alert ("Password Belum Diisi!"); </script>';
		back_siswa_form();}

	else if ($password2=='') {
		echo '<script type="text/javascript"> alert ("Ketik Ulang Password!"); </script>';
		back_siswa_form();}

	else if ($password!=$password2) {
		echo '<script type="text/javascript"> alert ("Pengetikan Ulang Password Tidak Sama!"); </script>';
		back_siswa_form();}

	else if($level==''){
		echo '<script type="text/javascript"> alert ("Level Administrator Belum Diisi!"); </script>';
		back_siswa_form();}
	
	else{
		// $file_name  = $_FILES['foto']['name']; 		//Membaca nama file
		// $file_size 		= $_FILES['foto']['size'];		//Membaca ukuran file
		// $file_type  = $_FILES['foto']['type'];		//Membaca jenis file
		// $source 	= $_FILES['foto']['tmp_name'];	//Source tempat upload file sementara
		// $direktori  = "./../upload/$file_name";		//Tempat upload file disimpan
		// $max_file_size	= 1000000; // 1MB

		// //Mengecek apakah file yang di upload sudah ada atau belum
		// if( file_exists ($direktori)) {
		// 	echo "file <strong>$file_name</strong>sudah ada, upload dengan nama lain <br/> <a href='./../admin.php?page=siswa'>kembali</a>";
			
		// 	exit();
		// }
		// else if($file_size > $max_file_size){
		// 	$eror   = true;
		// 	$pesan .= '- Ukuran file melebihi batas maximum<br />';}
		// else if	($file_type != "image/gif" && $file_type !="image/jpg" && $file_type != "image/jpeg" && $file_type != "image/png") {
		// 			echo $file_type."<br/>";
		// 			echo "file <strong>$file_name</strong> tidak di support, hanya untuk upload gambar (gif, jpg,jpef,png)";}
			
		// move_uploaded_file($source,$direktori);	//Memindahkan upload file dari direktori sementarake tempat permanen		
		if ($password==$password2) {
		mysql_query("INSERT INTO user VALUES('$nisn', '$nama_siswa', '$password', '$level')");
		mysql_query("INSERT INTO siswa VALUES('$nisn', '$id_kk', '$nama_siswa', '$alamat', '$tgl_lahir', '$foto')");
		echo '<script type="text/javascript"> alert ("Data Siswa Berhasil Dimasukan!"); </script>';
		echo '<meta http-equiv="refresh" content="0,./../admin.php?page=siswa">';}}

		//Menampilkan keterangan file
		// echo "<strong>Direktori sementara :</strong> ".$source."<br/>";
		// echo "<strong>Folder :</strong> ".$direktori."<br/>";
		// echo "<strong>Filename :</strong>".$file_name."<br/>";
		// echo "<strong>Size : </strong>".$file_size." bytes <br/>";
		// echo "<strong>File type : </strong>".$file_type."<br/>";
		// echo "<strong>Filename :</strong>".$file_name."<br/>";}
?>