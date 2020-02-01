<?php
	include 'act/g-session_start.php';
	include 'conf/connect.php';
?>
<html>
	<head>
		<title>PHBS | SMK MULIA HATI INSANI</title>
  		<?php include 'includes/head.php'; ?>
	</head>
	<body style="background:url(img/bg2.jpg);">
		<?php include 'includes/header.php'; ?>
		<div class="nav">
			<?php include 'includes/menu.php'; ?>
		</div>
		<div class="content">
			<div class="main">
				<?php include 'includes/slider.php'; ?>
			</div>
			<div class="content-bottom">
				<div class="content-box-r">
					<div class="box"><?php include 'includes/menu_switch.php'; ?></div>
				</div>
				<div class="content-box-l">
					<div class="box-title2">ARTIKEL SEKOLAH</div>
					<div class="box2">
						<a href="#"><strong>SEPUTAR SMK MHI</strong><br>Sekolah SMK Mulia Hati Insani.</a>
					</div>
				</div>
			</div>
			<?php include 'includes/footer.php';?>
		</div>
	</body>
</html>