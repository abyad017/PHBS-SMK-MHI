<?php
	session_start();
	if(!isset($_SESSION['id_user']) || ($_SESSION['level']!='Administrator')){
		
		function forbiden(){echo '<script type="text/javascript"> alert ("AKSES DITOLAK!"); </script>';}

		if($_SESSION['level']=='Guru'){
			forbiden();
			echo '<meta http-equiv="refresh" content="0,admin_g.php">';}

		else if($_SESSION['level']=="Siswa"){
			forbiden();
			echo '<meta http-equiv="refresh" content="0,admin_sw.php">';}

		else if($_SESSION['level']=="Wali"){
			forbiden();
			echo '<meta http-equiv="refresh" content="0,admin_sw.php">';}	
		
		else{
			forbiden();
			header("location:index.php");}
	}
?>