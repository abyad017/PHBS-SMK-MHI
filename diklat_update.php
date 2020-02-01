<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';
	
	$id_update = $_GET['id_update'];
	$query = mysql_query("SELECT * FROM mata_diklat WHERE id_diklat='$id_update'");
	$row = mysql_fetch_array($query);
?>
<html>
	<head>
		<title>Update Data DIKLAT | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">UPDATE DATA <a href="admin.php?page=diklat">DIKLAT</a></div>
		<form name="update_diklat" method="post" action="act/update_diklat.php">
			<div class="input-box, form">
				<input class="input" type="text" name="id_diklat" value="<?php echo $row[0];?>" />
					<input type="hidden" name="id_update" value="<?php echo $id_update; ?>" /> <br/>
				<input class="input" type="text" name="nama_diklat" value="<?php echo $row[1];?>" />
				<?php include 'includes/act-box-up.php'; ?>
			</div>
		</form>
	</body>
</html>