<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';

	$query = mysql_query("SELECT * FROM standar_kompetensi ORDER BY id_sk");
?>

<html>
	<head>
		<title>Daftar Standar Kompetensi | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
	</head>
	<body>
		<div class="box-title">DAFTAR STANDAR KOMPETENSI</div>
		<?php include 'cari/cari_standar_kompetensi.php'; ?>
		<a href="admin.php?page=standar_kompetensi_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="12%">ID STANDAR KOMP.</td>
				<td width="12%">ID KOMP. KEAHLIAN</td>
				<td width="20%">STANDAR KOMP.</td>
				<td width="5%">KELAS</td>				
				<td width="5%">OPSI</td>	
			</tr>
			<?php
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[0];?></td>
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[1];?></td>
				<td  style="padding-left:5px;"><?php echo $row[2];?></td>
				<td  style="text-align:center;"><?php echo $row[3];?></td>
				<td  style="text-align:center;">
					<a href="admin.php?page=update_standar_kompetensi&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_standar_kompetensi.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA <?php echo $row[0];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>