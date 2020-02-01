<?php
	include 'act/g-session_start.php';
	include 'conf/connect.php';

	$query 	= mysql_query("SELECT * FROM siswa ORDER BY nisn");

	$query2	= mysql_query("SELECT * FROM user WHERE id_user='$_SESSION[id_user]'");
	$row2	= mysql_fetch_array($query2);
	
	$query3 = mysql_query("SELECT * FROM standar_kompetensi ORDER BY id_sk");	
?>
<html>
	<head>
		<title>Input Data Nilai</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">INPUT DATA <a href="admin_g.php?page=g_nilai">NILAI</a></div>
		<form name="input_g_nilai" method="post" action="act/input_g_nilai.php">
			<div class="input-box, form">

					<input class="input" type="hidden" name="no">

				<select class="input" name="nisn" style="width:200px; padding-left:10;">
					<option style="color:#999;">NISN Murid</option>
					<?php
						while ($row = mysql_fetch_array($query)) {
					?>
					<option style="color:#382D2C;"><?php echo $row[0];?></option>
					<?php } ?>
				</select> <br/>

					<input class="input" type="hidden" name="id_guru" value="<?php echo $row2[0];?>">
				
				<select class="input" name="id_sk" style="width:200px; padding-left:10;">
					<option style="color:#999;">ID STANDAR KOMP.</option>
					<?php
						while ($row3 = mysql_fetch_array($query3)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row3[0];?></option>
					<?php } ?>
				</select> <br/>

				<input class="input" type="text" name="nilai_angka" placeholder="Nilai Angka"> <br/>		
				<?php include 'includes/act-box-in.php'; ?>
			</div>
		</form>
	</body>
</html>