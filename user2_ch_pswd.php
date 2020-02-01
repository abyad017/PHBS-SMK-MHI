<?php
	include 'act/g-session_start.php';
	include 'conf/connect.php';	

	$id_user 	= $_SESSION['id_user'];
	$query 		= mysql_query("SELECT * FROM user WHERE id_user='$id_user'");
	$row 		= mysql_fetch_array($query);
?>
<html>
	<head>
		<title>Update Data Penggunan | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">GANTI USERNAME & PASSWORD</div>
		<form name="user2_ch_pswd" method="post" action="act/user2_ch_pswd.php">
			<div class="input-box, form">
				<input class="input" type="text" name="username" placeholder="Username" />
					<input type="hidden" name="id_update" value="<?php echo $id_user; ?>" /> <br/>
				<input class="input" type="password" name="password"  placeholder="Ketik Password" /> <br/>
				<input class="input" type="password" name="password2" placeholder="Ketik Ulang Password" />				
				<?php include 'includes/act-box-up.php'; ?>
			</div>
		</form>
	</body>
</html>