<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';
	
	$query2 = mysql_query("SELECT * FROM kompetensi_keahlian ORDER BY id_kk");
?>
<html>
	<head>
		<title>Input Data Siswa</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<div class="box-title">INPUT DATA <a href="admin.php?page=siswa">SISWA</a></div>
		<form name="input_siswa" method="post" action="act/input_siswa.php" enctype="multipart/form-data">
			<div class="input-box, form">
<!-- 				<input class="input" type="text" required pattern=".{8,}" title="" name="nisn" placeholder="NISN Murid"><br/> -->
				<input class="input" type="text" required pattern=".{8,}" title="" name="nisn" placeholder="NISN Murid"><br/>				

				<select class="input" name="id_kk" style="width:180px; padding-left:10;">
					<option style="color:#999;">ID Komp. Keahlian</option>
					<?php
						while ($row2 = mysql_fetch_array($query2)) {
					?>	
					<option style="color:#382D2C;"><?php echo $row2[0];?></option>
					<?php } ?>
				</select> <br/>

				<input class="input" type="text" name="nama_siswa" placeholder="Nama Siswa"> <br/>

				<textarea class="textarea" type="text" name="alamat" placeholder="Alamat Siswa" style="width:180px;"></textarea> <br/>
				
				<input class="input" type="text" name="tgl_lahir" placeholder="Tanggal Lahir"> <br/>
				<!-- <input class="file" type="file" name="foto" placeholder="Foto Siswa"> <br/> -->
				<input class="input" type="password" name="password" placeholder="Password"> <br/>
				<input class="input" type="password" name="password2" placeholder="Ketik Ulang Password">

					<input class="input" type="hidden" name="level" value="Siswa">
				<?php include 'includes/act-box-in.php'; ?>
			</div>
		</form>
	</body>
</html>