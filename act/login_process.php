<?php
	session_start();
	include './../conf/connect.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$op 	  = $_GET['op'];
	
	function welcome(){
		echo '<script language="javascript">alert("SELAMAT DATANG DI PHBS - SMK MULIA HATI INSANI !")</script>';
		// echo '<meta http-equiv="refresh" content="0,./../admin.php">';
	}

	if($op=="in"){
		$cek = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
		if(mysql_num_rows($cek)==1){
			$c = mysql_fetch_array($cek);
			// $_SESSION['username'] = $c['username'];
			$_SESSION['id_user'] = $c['id_user'];
			$_SESSION['level'] = $c['level'];
			
			if($c['level']=="Administrator"){
				welcome();
				echo '<meta http-equiv="refresh" content="0,./../admin.php">';}

			else if($c['level']=="Guru"){
				welcome();
				echo '<meta http-equiv="refresh" content="0,./../admin_g.php">';}

			else if($c['level']=="Siswa"){
				welcome();
				echo '<meta http-equiv="refresh" content="0,./../admin_sw.php">';}

			else if($c['level']=="Wali"){
				welcome();
				echo '<meta http-equiv="refresh" content="0,./../admin_sw.php">';}
		}
	else{header('location:./../includes/error.php');}}
	
	else if($op=="out"){
		unset($_SESSION['id_user']);
		unset($_SESSION['level']);
		header('location:./../index.php');}
?>