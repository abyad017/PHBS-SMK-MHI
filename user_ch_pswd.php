<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';	

	$id_user 	= $_SESSION['id_user'];
	$query 		= mysql_query("SELECT * FROM user WHERE id_user='$id_user'");
	$row 		= mysql_fetch_array($query);

	$query2		= mysql_query("SELECT * FROM level_user");
?>
<html>
	<head>
		<title>Update Data Penggunan | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">GANTI DATA AKSES</div>
		<form name="user_ch_pswd" method="post" action="act/user_ch_pswd.php">
			<div class="input-box, form">
				<!-- <input class="input" type="text" name="username" value="<?php //echo $row[1];?>" /> -->
				<input class="input" type="text" name="username" placeholder="Username" />
					<input type="hidden" name="id_update" value="<?php echo $id_user; ?>" /> <br/>
				<input class="input" type="password" name="password" placeholder="Password" /> <br/>
				<input class="input" type="password" name="password2" placeholder="Ketik Ulang Password" /> <br/>

				<select class="input" name="level" style="width:200px; padding-left:10;">
					<option style="color:#999;">Level Administrator</option>
					<?php
						while ($row2 = mysql_fetch_array($query2)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row2[0];?></option>
					<?php } ?>
				</select>

				<?php include 'includes/act-box-up.php'; ?>
			</div>
		</form>
	</body>
</html>