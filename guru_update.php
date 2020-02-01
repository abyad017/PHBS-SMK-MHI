<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';	

	$id_update  = $_GET['id_update'];
	$query 		= mysql_query("SELECT * FROM guru WHERE id_guru='$id_update'");
	$row 		= mysql_fetch_array($query);

	$query2		= mysql_query("SELECT * FROM kompetensi_keahlian ORDER BY id_kk");	
?>
<html>
	<head>
		<title>Update Data Guru | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">UPDATE DATA <a href="admin.php?page=guru">GURU</a></div>
		<form name="update_guru" method="post" action="act/update_guru.php">
			<div class="input-box, form">
					<input type="hidden" name="id_update" value="<?php echo $id_update; ?>" /> <br/>
				
				<input class="input" type="text" name="id_guru" value="<?php echo $row[0];?>" /><br/>

				<select class="input" name="id_kk" style="width:180px; padding-left:10;">
					<option style="color:#999;"><?php echo $row[1];?></option>
					<?php
						while ($row2 = mysql_fetch_array($query2)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row2[0];?></option>
					<?php } ?>
				</select> <br/>
				
				<input class="input" type="text" name="nama_guru" value="<?php echo $row[2];?>" /> <br/>
				<input class="input" type="text" name="nip" value="<?php echo $row[3];?>" /> <br/>

				<textarea class="textarea" type="text" name="alamat" style="width:180px;" placeholder="Alamat Guru"><?php echo $row[4];?></textarea><br/>
				
				<input class="input" type="text" name="telp" value="<?php echo $row[5];?>" /> <br/>

				<input class="input" type="password" name="password" placeholder="Password"> <br/>
				<input class="input" type="password" name="password2" placeholder="Ketik Ulang Password">

					<input class="input" type="hidden" name="level" value="Guru">				
				<?php include 'includes/act-box-up.php'; ?>
			</div>
		</form>
	</body>
</html>