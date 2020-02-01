<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';

	$query 	= mysql_query("SELECT * FROM nilai ORDER BY no");
?>

<html>
	<head>
		<title>Daftar Nilai | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
	</head>
	<body>
		<div class="box-title">DAFTAR NILAI</div>
		<?php include 'cari/cari_nilai.php'; ?>
		<a href="admin.php?page=nilai_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px; font-size:14px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold;">
				<td width="2%">NISN</td>
				<td width="2%">ID GURU</td>
				<td width="10%">ID STANDAR KOMP.</td>
				<td width="4%">NILAI ANGKA</td>
				<td width="4%">NILAI HURUF</td>			
				<td width="3%">OPSI</td>	
			</tr>
			<?php
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[1];?></td>
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[2];?></td>
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[3];?></td>
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[4];?></td>
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[5];?></td>				
				<td  style="text-align:center;">
					<a href="admin.php?page=update_nilai&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_nilai.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA NILAI <?php echo $row[1];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>