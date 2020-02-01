<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';

	$query = mysql_query("SELECT * FROM mata_diklat ORDER BY id_diklat");
?>
<html>
	<head>
		<title>Input Data Kompetensi Keahlian</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">INPUT DATA <a href="admin.php?page=kompetensi_keahlian">KOMPETENSI KEAHLIAN</a></div>
		<form name="input_kompetensi_keahlian" method="post" action="act/input_kompetensi_keahlian.php">
			<div class="input-box, form">
				<input class="input" type="text" name="id_kk"  placeholder="ID Komp. Keahlian" /> <br/>
				
				<select class="input" name="id_diklat" style="width:200px; padding-left:10;">
					<option style="color:#999;">ID DIKLAT</option>
					<?php
						while ($row = mysql_fetch_array($query)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row[0];?></option>
					<?php } ?>
				</select> <br/>

				<input class="input" type="text" name="nama_kk" placeholder="Nama Komp. Keahlian">
				<?php include 'includes/act-box-in.php'; ?>
			</div>
		</form>
	</body>
</html>