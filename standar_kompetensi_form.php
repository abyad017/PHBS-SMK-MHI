<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';

	$query = mysql_query("SELECT * FROM kompetensi_keahlian ORDER BY id_kk");
?>
<html>
	<head>
		<title>Input Data Standar Kompetensi</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">INPUT DATA <a href="admin.php?page=standar_kompetensi">STANDAR KOMPETENSI</a></div>
		<form name="input_standar_kompetensi" method="post" action="act/input_standar_kompetensi.php">
			<div class="input-box, form">
				<input class="input" type="text" name="id_sk"  placeholder="ID Standar Komp." /> <br/>
				
				<select class="input" name="id_kk" style="width:180px; padding-left:10;">
					<option style="color:#999;">ID Komp. Keahlian</option>
					<?php
						while ($row = mysql_fetch_array($query)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row[0];?></option>
					<?php } ?>
				</select> <br/>

				<input class="input" type="text" name="nama_sk" placeholder="Nama Standar Komp."> <br/>
				<input class="input" type="text" name="kelas_sk" placeholder="Kelas Standar Komp.">				
				<?php include 'includes/act-box-in.php'; ?>
			</div>
		</form>
	</body>
</html>