<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';	

	$id_update  = $_GET['id_update'];
	$query 		= mysql_query("SELECT * FROM standar_kompetensi WHERE id_sk='$id_update'");
	$row 		= mysql_fetch_array($query);

	$query2 	= mysql_query("SELECT * FROM kompetensi_keahlian ORDER BY id_kk");	
?>
<html>
	<head>
		<title>Update Data Standar Kompetensi | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">UPDATE DATA <a href="admin.php?page=standar_kompetensi">STANDAR KOMPETENSI</a></div>
		<form name="update_standar_kompetensi" method="post" action="act/update_standar_kompetensi.php">
			<div class="input-box, form">
				<input class="input" type="text" name="id_sk" value="<?php echo $row[0];?>" />
					<input type="hidden" name="id_update" value="<?php echo $id_update; ?>" /> <br/>

				<select class="input" name="id_kk" style="width:180px; padding-left:10;">
					<option style="color:#999;"><?php echo $row[1];?></option>
					<?php
						while ($row2 = mysql_fetch_array($query2)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row2[0];?></option>
					<?php } ?>
				</select> <br/>
				
				<input class="input" type="text" name="nama_sk" value="<?php echo $row[2];?>" /> <br/>
				<input class="input" type="text" name="kelas_sk" value="<?php echo $row[3];?>" />
				<?php include 'includes/act-box-up.php'; ?>
			</div>
		</form>
	</body>
</html>