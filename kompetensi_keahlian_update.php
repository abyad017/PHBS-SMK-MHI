<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';	

	$id_update  = $_GET['id_update'];
	$query 		= mysql_query("SELECT * FROM kompetensi_keahlian WHERE id_kk='$id_update'");
	$row  		= mysql_fetch_array($query);

	$query2 	= mysql_query("SELECT * FROM mata_diklat ORDER BY id_diklat");	
?>
<html>
	<head>
		<title>Update Data Kompetensi Keahlian | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">UPDATE DATA <a href="admin.php?page=kompetensi_keahlian">KOMPETENSI KEAHLIAN</a></div>
		<form name="update_kompetensi_keahlian" method="post" action="act/update_kompetensi_keahlian.php">
			<div class="input-box, form">
				<input class="input" type="text" name="id_kk" value="<?php echo $row[0];?>" />
					<input type="hidden" name="id_update" value="<?php echo $id_update; ?>" /> <br/>

				<select class="input" name="id_diklat" style="width:200px; padding-left:10;">
					<option style="color:#999;"><?php echo $row[1];?></option>
					<?php
						while ($row2 = mysql_fetch_array($query2)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row2[0];?></option>
					<?php } ?>
				</select> <br/>
				
				<input class="input" type="text" name="nama_kk" value="<?php echo $row[2];?>" />
				<?php include 'includes/act-box-up.php'; ?>
			</div>
		</form>
	</body>
</html>