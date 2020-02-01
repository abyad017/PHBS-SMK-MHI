<?php
	include 'act/g-session_start.php';
	include 'conf/connect.php';

	$query = mysql_query("SELECT * FROM siswa ORDER BY nisn");
?>

<html>
	<head>
		<title>Daftar Siswa | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
	</head>
	<body>
		<div class="box-title">DAFTAR SISWA</div>
		<?php include 'cari/cari_g_siswa.php'; ?>
		<a href="#">
			<input class="button" type="submit" style="background-color:silver; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold;">
				<td width="2%">NISN</td>
				<td width="10%">ID KOMP. KEAHLIAN</td>
				<td width="15%">NAMA SISWA</td>
				<td width="2%">ALAMAT</td>
				<td width="2%">TGL LAHIR</td>
				<!-- <td width="10%">FOTO</td> -->
			</tr>
			<?php
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr>
				<td  style="padding-left:15px;"><?php echo $row[0];?></td>
				<td  style="padding-left:15px;"><?php echo $row[1];?></td>
				<td  style="padding-left:15px;"><?php echo $row[2];?></td>
				<td  style="padding-left:15px;"><?php echo $row[3];?></td>
				<td  style="padding-left:15px;"><?php echo $row[4];?></td>
				<!-- <td  style="padding-left:15px;"><?php //echo $row[5];?></td> -->
			</tr>
			<?php } ?>
		</table>
	</body>
</html>