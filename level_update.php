<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';
	
	$id_update = $_GET['id_update'];
	$query = mysql_query("SELECT * FROM level_user WHERE level='$id_update'");
	$row = mysql_fetch_array($query);
?>
<html>
	<head>
		<title>Update Data Level Administrator | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">UPDATE DATA <a href="admin.php?page=level">LEVEL ADMINISTRATOR</a></div>
		<form name="update_level" method="post" action="act/update_level.php">
			<div class="input-box, form">
				<input class="input" type="text" name="level" value="<?php echo $row[0];?>" />
					<input type="hidden" name="id_update" value="<?php echo $id_update; ?>" /> <br/>
				<?php include 'includes/act-box-up.php'; ?>
			</div>
		</form>
	</body>
</html>