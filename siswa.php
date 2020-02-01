<?php
	include 'act/u-session_start.php';
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
		<?php include 'cari/cari_siswa.php'; ?>
		<a href="admin.php?page=siswa_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="1%">NISN</td>
				<td width="6%">ID KOMP. KEAHLIAN</td>
				<td width="6%">NAMA SISWA</td>
				<td width="5%">ALAMAT</td>
				<td width="1%">TGL LAHIR</td>
				<!-- <td width="10%">FOTO</td> -->								
				<td width="2%">OPSI</td>	
			</tr>
			<?php
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:14px;">
				<td  style="text-align:center;"><?php echo $row[0];?></td>
				<td  style="text-align:center;"><?php echo $row[1];?></td>
				<td  style="padding-left:15px;"><?php echo $row[2];?></td>
				<td  style="padding-left:15px;"><?php echo $row[3];?></td>
				<td  style="text-align:center;"><?php echo $row[4];?></td>
				<!-- <td  style="padding-left:15px;"><?php //echo $row[5];?></td> -->
				<td  style="text-align:center;">
					<a href="admin.php?page=update_siswa&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_siswa.php?id_delete=<?php echo $row[0] ?>" onClick="return confirm('HAPUS DATA <?php echo $row[0]; ?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>