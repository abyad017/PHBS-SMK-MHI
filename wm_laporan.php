<?php
	include 'act/sw-session_start.php';
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

		<div class="box-title">DAFTAR NILAI SISWA</div>
		<?php include 'cari/cari_sw_nilai.php'; ?>
		<a href="#">
			<input class="button" type="submit" style="background-color:silver; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
		</a>

		<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
			<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:12px;">
				<td width="10%">NISN</td>
				<td width="10%">NAMA SISWA</td>
				<td width="10%">WALI MURID</td>
				<td width="10%">KOMP. KEAHLIAN</td>
				<td width="10%">ID GURU</td>
				<td width="10%">NAMA GURU</td>
				<td width="10%">NIP</td>
				<td width="10%">ID STANDAR KOMP.</td>
				<td width="10%">STANDAR KOMP.</td>
				<td width="9%">NILAI ANGKA</td>
				<td width="9%">NILAI HURUF</td>	
			</tr>
			<?php
				$query 	= mysql_query("SELECT * FROM nilai a, guru b, siswa c, standar_kompetensi d, kompetensi_keahlian e, 
					wali f WHERE a.nisn=c.nisn AND a.id_guru=b.id_guru AND a.id_sk=d.id_sk AND c.id_kk=e.id_kk
					AND a.nisn=f.nisn AND f.id_wali='$_SESSION[id_user]'");
		
				while ($row = mysql_fetch_array($query)) {
			?>
			<tr style="font-size:12px;">
				<td  style="padding-left:5px;"><?php echo $row[1];?></td>
				<td  style="padding-left:5px;"><?php echo $row[14];?></td>
				<td  style="padding-left:5px;"><?php echo $_SESSION[id_user];?></td>
				<td  style="padding-left:5px;"><?php echo $row[24];?></td>
				<td  style="padding-left:5px;"><?php echo $row[2];?></td>
				<td  style="padding-left:5px;"><?php echo $row[8];?></td>
				<td  style="padding-left:5px;"><?php echo $row[9];?></td>
				<td  style="padding-left:5px;"><?php echo $row[3];?></td>
				<td  style="padding-left:5px;"><?php echo $row[20];?></td>
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[4];?></td>
				<td  style="padding-left:5px; text-align:center;"><?php echo $row[5];?></td>
			</tr>
			<?php } ?>
		</table>
		<br/>
	</body>
</html>
