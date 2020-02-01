<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';
	
	$query = mysql_query("SELECT * FROM wali ORDER BY id_wali");
?>

<html>
	<head>
		<title>Daftar Wali Murid | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">
	</head>
	<body>
		<div class="box-title">DAFTAR WALI MURID</div>
		<?php include 'cari/cari_wali.php'; ?>
		<a href="admin.php?page=wali_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="2%" rowspan="2">ID WALI</td>
				<td width="2%" rowspan="2">NISN</td>
				<td width="5%" colspan="2">AYAH</td>
				<td width="5%" colspan="2">IBU</td>
				<td width="3%" rowspan="2">ALAMAT</td>
				<td width="8%" rowspan="2">NO. TELP</td>
				<td width="5%" rowspan="2">OPSI</td>	
			</tr>
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td>NAMA</td>
				<td>PEKERJAAN</td>
				<td>NAMA</td>
				<td>PEKERJAAN</td>									
			</tr>
			<?php
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px;"><?php echo $row[0];?></td>
				<td  style="padding-left:5px;"><?php echo $row[1];?></td>
				<td  style="padding-left:5px;"><?php echo $row[2];?></td>
				<td  style="padding-left:5px;"><?php echo $row[3];?></td>
				<td  style="padding-left:5px;"><?php echo $row[4];?></td>
				<td  style="padding-left:5px;"><?php echo $row[5];?></td>
				<td  style="padding-left:5px;"><?php echo $row[6];?></td>
				<td  style="padding-left:5px;"><?php echo $row[7];?></td>
				<td  style="text-align:center;">
					<a href="admin.php?page=update_wali&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_wali.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA <?php echo $row[0];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>