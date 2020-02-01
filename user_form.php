<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';

	$query = mysql_query("SELECT * FROM level_user ORDER BY level");
?>
<html>
	<head>
		<title>Input Data Pengguna</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">INPUT DATA <a href="admin.php?page=user">PENGGUNA</a></div>
		<form name="input_user" method="post" action="act/input_user.php">
			<div class="input-box, form">
				<input class="input" type="text" name="id_user"  placeholder="ID User" /> <br/>
				<input class="input" type="text" name="username" placeholder="Username"> <br/>
				<input class="input" type="password" name="password" placeholder="Password"> <br/>
				<input class="input" type="password" name="password2" placeholder="Ketik Ulang Password"> <br/>
				
				<select class="input" name="level" style="width:200px; padding-left:10;">
					<option style="color:#999;">Level Administrator</option>
					<?php
						while ($row = mysql_fetch_array($query)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row[0];?></option>
					<?php } ?>
				</select>

				<?php include 'includes/act-box-in.php'; ?>
			</div>
		</form>
	</body>
</html>