<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';
	
	$query = mysql_query("SELECT * FROM siswa ORDER BY nisn");
?>
<html>
	<head>
		<title>Input Data Wali Murid</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">INPUT DATA <a href="admin.php?page=wali">WALI MURID</a></div>
		<form name="input_wali" method="post" action="act/input_wali.php">
			<div class="input-box, form">
				<input class="input" type="text" name="id_wali"  placeholder="ID Wali Murid" /> <br/>
				
				<select class="input" name="nisn" style="width:180px; padding-left:10;">
					<option style="color:#999;">NISN Murid</option>
					<?php
						while ($row = mysql_fetch_array($query)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row[0];?></option>
					<?php } ?>
				</select> <br/>

				<input class="input" type="text" name="nama_ayah" placeholder="Nama Ayah"> <br/>
				<input class="input" type="text" name="kerja_ayah" placeholder="Pekerjaan Ayah"> <br/>
				<input class="input" type="text" name="nama_ibu" placeholder="Nama Ibu"> <br/>
				<input class="input" type="text" name="kerja_ibu" placeholder="Pekerjaan Ibu"> <br/>

				<textarea class="textarea" type="text" name="alamat" style="width:180px;" placeholder="Alamat Wali Murid"></textarea><br/>
				
				<input class="input" type="text" name="telp" placeholder="No. Telepon"> <br/>
				<input class="input" type="password" name="password" placeholder="Password"> <br/>
				<input class="input" type="password" name="password2" placeholder="Ketik Ulang Password">

					<input class="input" type="hidden" name="level" value="Wali">
				<?php include 'includes/act-box-in.php'; ?>
			</div>
		</form>
	</body>
</html>