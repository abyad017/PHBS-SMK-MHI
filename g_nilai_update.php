<?php
	include 'act/g-session_start.php';
	include 'conf/connect.php';	

	$id_update  = $_GET['id_update'];
	$query 		= mysql_query("SELECT * FROM nilai WHERE no='$id_update'");
	$row 		= mysql_fetch_array($query);

	$query2		= mysql_query("SELECT * FROM siswa ORDER BY nisn");

	$query3		= mysql_query("SELECT * FROM user WHERE id_user='$_SESSION[id_user]'");
	$row3		= mysql_fetch_array($query3);

	$query4 	= mysql_query("SELECT * FROM standar_kompetensi ORDER BY id_sk");	
?>
<html>
	<head>
		<title>Update Data Nilai | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">UPDATE DATA <a href="admin_g.php?page=g_nilai">NILAI</a></div>
		<form name="update_g_nilai" method="post" action="act/update_g_nilai.php">
			<div class="input-box, form">
					
					<input type="hidden" name="id_update" value="<?php echo $id_update; ?>" />

				<select class="input" name="nisn" style="width:200px; padding-left:10;">
					<option style="color:#999;"><?php echo $row[1];?></option>
					<?php
						while ($row2 = mysql_fetch_array($query2)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row2[0];?></option>
					<?php } ?>
				</select> <br/>

					<input class="input" type="hidden" name="id_guru" value="<?php echo $row3[0];?>">
				
				<select class="input" name="id_sk" style="width:200px; padding-left:10;">
					<option style="color:#999;"><?php echo $row[3];?></option>
					<?php
						while ($row4 = mysql_fetch_array($query4)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row4[0];?></option>
					<?php } ?>
				</select> <br/>
				
				<input class="input" type="text" name="nilai_angka" value="<?php echo $row[4];?>" /> <br/>
				
					<input class="input" type="hidden" name="nilai_huruf" value="<?php echo $row[5];?>" />
				<?php include 'includes/act-box-up.php'; ?>
			</div>
		</form>
	</body>
</html>