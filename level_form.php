<?php 
	include 'act/u-session_start.php';
?>
<html>
	<head>
		<title>Input Data Level Administrator</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">INPUT DATA <a href="admin.php?page=level">LEVEL ADMINISTRATOR</a></div>
		<form name="input_level" method="post" action="act/input_level.php">
			<div class="input-box, form">
				<input class="input" type="text" name="level"  placeholder="Level Administrator" /> <br/>
				<?php include 'includes/act-box-in.php'; ?>
			</div>
		</form>
	</body>
</html>