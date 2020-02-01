<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';
		
	$query = mysql_query("SELECT * FROM kompetensi_keahlian ORDER BY id_kk");
?>
<html>
	<head>
		<title>Input Data Guru</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">INPUT DATA <a href="admin.php?page=guru">GURU</a></div>
		<form name="input_guru" method="post" action="act/input_guru.php">
			<div class="input-box, form">
				<input class="input" type="text" name="id_guru" placeholder="ID Guru"> <br/>
				
				<select class="input" name="id_kk" style="width:180px; padding-left:10;">
					<option style="color:#999;">ID Komp. Keahlian</option>
					<?php
						while ($row = mysql_fetch_array($query)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row[0];?></option>
					<?php } ?>
				</select> <br/>

				<input class="input" type="text" name="nama_guru" placeholder="Nama Guru"> <br/>
				<input class="input" type="text" name="nip" placeholder="NIP"> <br/>

				<textarea class="textarea" type="text" name="alamat" placeholder="Alamat Guru" style="width:180px;"></textarea><br/>
				
				<input class="input" type="text" name="telp" placeholder="Nomor Telepon"> <br/>
				<input class="input" type="password" name="password" placeholder="Password"> <br/>
				<input class="input" type="password" name="password2" placeholder="Ketik Ulang Password">

					<input class="input" type="hidden" name="level" value="Guru">
				<?php include 'includes/act-box-in.php'; ?>
			</div>
		</form>
	</body>
</html>