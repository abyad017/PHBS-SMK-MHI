<?php
	include 'act/u-session_start.php';
	include 'conf/connect.php';
?>

<html>
	<head>
		<title>Laporan | PHBS - SMK MHI</title>
		<link rel="stylesheet" type="text/css" href="style/input.css">	
	</head>
	<body>
		<div class="box-title">LAPORAN</div>
		<br/>
		<div class="box-title">DAFTAR SISWA</div>
		<?php include 'cari/cari_siswa.php'; ?>
		<a href="admin.php?page=siswa_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="1%">NISN</td>
				<td width="10%">KOMP. KEAHLIAN</td>
				<td width="5%">NAMA SISWA</td>
				<td width="1%">ALAMAT</td>
				<td width="1%">TGL LAHIR</td>
				<!-- <td >Foto</td> -->
				<td width="1%">OPSI</td>
			</tr>
			<?php
				$query 	= mysql_query("SELECT siswa.*, kompetensi_keahlian.nama FROM siswa INNER JOIN kompetensi_keahlian ON 
				siswa.id_kk = kompetensi_keahlian.id_kk");

				while($row=mysql_fetch_array($query)){
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[0];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[6];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[2];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[3];?></td>
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[4];?></td>
				<!-- <td  style="padding-left:5px;">				<?php //echo $row[5];?></td> -->
				<td  style="text-align:center;">
					<a href="admin.php?page=update_siswa&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_siswa.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA SISWA <?php echo $row[0];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<br/>

		<br/>
		<div class="box-title">DAFTAR GURU</div>
		<?php include 'cari/cari_guru.php'; ?>
		<a href="admin.php?page=guru_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="1%">ID GURU</td>
				<td width="10%">KOMP. KEAHLIAN</td>
				<td width="5%">NAMA GURU</td>
				<td width="1%">NIP</td>
				<td width="1%">ALAMAT</td>				
				<td width="1%">TELP</td>
				<td width="1%">OPSI</td>
			</tr>
			<?php
				$query 	= mysql_query("SELECT guru.*, kompetensi_keahlian.nama FROM guru INNER JOIN kompetensi_keahlian ON 
				guru.id_kk = kompetensi_keahlian.id_kk");

				while($row=mysql_fetch_array($query)){
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[0];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[6];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[2];?></td>
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[3];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[4];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[5];?></td>
				<td  style="text-align:center;">
					<a href="admin.php?page=update_guru&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_guru.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA GURU<?php echo $row[0];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<br/>

		<br/>
		<div class="box-title">DAFTAR WALI MURID</div>
		<?php include 'cari/cari_wali.php'; ?>
		<a href="admin.php?page=wali_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="1%">ID WALI</td>
				<td width="10%">NAMA SISWA</td>
				<td width="10%">NAMA AYAH</td>
				<td width="10%">PKRJN AYAH</td>
				<td width="9%">NAMA IBU</td>
				<td width="9%">PKRJN IBU</td>								
				<td width="3%">ALAMAT</td>
				<td width="8%">NO. TELP</td>
				<td width="5%">OPSI</td>	
			</tr>
			<?php
				$query 	= mysql_query("SELECT wali.*, siswa.nama FROM wali INNER JOIN siswa ON wali.nisn = siswa.nisn");
		
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[0];?></td>
				<td  style="padding-left:5px;"><?php echo $row[8];?></td>
				<td  style="padding-left:5px;"><?php echo $row[2];?></td>
				<td  style="padding-left:5px;"><?php echo $row[3];?></td>
				<td  style="padding-left:5px;"><?php echo $row[4];?></td>
				<td  style="padding-left:5px;"><?php echo $row[5];?></td>
				<td  style="padding-left:5px;"><?php echo $row[6];?></td>
				<td  style="padding-left:5px;"><?php echo $row[7];?></td>
				<td  style="text-align:center;">
					<a href="admin.php?page=update_wali&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>						
					<a href="act/delete_wali.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA WALI MURID <?php echo $row[0];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<br/>

		<br/>
		<div class="box-title">DAFTAR NILAI SISWA</div>
		<?php include 'cari/cari_nilai.php'; ?>
		<a href="admin.php?page=nilai_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="10%">NISN</td>
				<td width="10%">NAMA SISWA</td>
				<td width="10%">KOMP. KEAHLIAN</td>
				<td width="10%">ID GURU</td>
				<td width="10%">NAMA GURU</td>
				<td width="10%">NIP</td>
				<td width="10%">ID STANDAR KOMP.</td>
				<td width="10%">STANDAR KOMP.</td>
				<td width="9%">NILAI ANGKA</td>
				<td width="9%">NILAI HURUF</td>	
				<td width="5%">OPSI</td>
			</tr>
			<?php
				$query 	= mysql_query("SELECT * FROM nilai a, guru b, siswa c, standar_kompetensi d, kompetensi_keahlian e 
					WHERE a.nisn=c.nisn AND a.id_guru=b.id_guru AND a.id_sk=d.id_sk AND c.id_kk=e.id_kk");
		
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[1];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[14];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[24];?></td>
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[2];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[8];?></td>
				<td  style="padding-left:5px text-align:center;;">	<?php echo $row[9];?></td>
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[3];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[20];?></td>
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[4];?></td>
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[5];?></td>
				<td  style="text-align:center;">
					<a href="admin.php?page=update_nilai&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_nilai.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA NILAI <?php echo $row[1];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<br/>

		<br/>
		<div class="box-title">DAFTAR DIKLAT</div>
		<?php include 'cari/cari_diklat.php'; ?>
		<a href="admin.php?page=diklat_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="10%">ID DIKLAT</td>
				<td width="40%">NAMA DIKLAT</td>
				<td width="5%">OPSI</td>
			</tr>
			<?php
				$query 	= mysql_query("SELECT * FROM mata_diklat ORDER BY id_diklat");
		
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[0];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[1];?></td>
				<td  style="text-align:center;">
					<a href="admin.php?page=update_diklat&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_diklat.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA DIKLAT <?php echo $row[0];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<br/>


		<br/>
		<div class="box-title">DAFTAR KOMPETENSI KEAHLIAN</div>
		<?php include 'cari/cari_kompetensi_keahlian.php'; ?>
		<a href="admin.php?page=kompetensi_keahlian_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="7%">ID KOMP. KEAHLIAN</td>
				<td width="10%">DIKLAT</td>
				<td width="10%">KOMP. KEAHLIAN</td>
				<td width="3%">OPSI</td>	
			</tr>
			<?php
				$query 	= mysql_query("SELECT kompetensi_keahlian.*, mata_diklat.nama FROM kompetensi_keahlian INNER JOIN
				 mata_diklat ON kompetensi_keahlian.id_diklat = mata_diklat.id_diklat");
		
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[0];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[3];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[2];?></td>
				<td  style="text-align:center;">
					<a href="admin.php?page=update_kompetensi_kkeahlian&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_kompetensi_keahlian.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA KOMP. KEAHLIAN <?php echo $row[0];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<br/>

		<br/>
		<div class="box-title">DAFTAR STANDAR KOMPETENSI</div>
		<?php include 'cari/cari_standar_kompetensi.php'; ?>
		<a href="admin.php?page=standar_kompetensi_form">
			<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
				<td width="5%">ID STANDAR KOMP.</td>
				<td width="5%">ID KOMP. KEAHLIAN</td>
				<td width="10%">STANDAR KOMP.</td>
				<td width="1%">KELAS</td>				
				<td width="3%">OPSI</td>	
			</tr>
			<?php
				$query 	= mysql_query("SELECT * FROM standar_kompetensi ORDER BY id_sk");
		
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:14px;">
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[0];?></td>
				<td  style="padding-left:5px; text-align:center;">	<?php echo $row[1];?></td>
				<td  style="padding-left:5px;">						<?php echo $row[2];?></td>
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[3];?></td>				
				<td  style="text-align:center;">
					<a href="admin.php?page=update_standar_kompetensi&&id_update=<?php echo $row[0]; ?>">
						<img src="img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
					<a href="act/delete_standar_kompetensi.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA STANDAR KOMP. <?php echo $row[0];?> ?');">
						<img src="img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
				</td>
			</tr>
			<?php } ?>
		</table>
		<br/>
	</body>
</html>