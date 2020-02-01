<?php 
	include 'act/u-session_start.php';
?>
<html>
	<head>
		<title>Input Data DIKLAT</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">INPUT DATA <a href="admin.php?page=diklat">DIKLAT</a></div>
		<form name="input_diklat" method="post" action="act/input_diklat.php">
			<div class="input-box, form">
				<input class="input" type="text" name="id_diklat"  placeholder="ID DIKLAT" /> <br/>
				<input class="input" type="text" name="nama_diklat" placeholder="Nama DIKLAT">
				<?php include 'includes/act-box-in.php'; ?>
			</div>
		</form>
	</body>
</html>