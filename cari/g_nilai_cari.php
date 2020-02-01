<?php
	include 'includes/c-session_start.php';
	include './../conf/connect.php';
?>
<html>
	<head>
		<title>Pencarian Data Nilai | PHBS - SMK MHI</title>

		<?php include 'includes/c-head.php'; ?> <!-- Slider script included -->
	</head>
	<body style="background:url(../img/bg2.jpg);">
		<?php include 'includes/c-header.php'; ?>
		<div class="nav">
			<?php include 'includes/c-menu.php'; ?>	
		</div>
		<div class="content">
			<div class="main">
				<?php include 'includes/c-slider.php'; ?>
			</div>
			<div class="content-bottom">
				<div class="content-box-r">
					<div class="box">
						<?php include 'includes/c-menu_switch.php'; ?>

						<div class="box-title">HASIL PENCARIAN</div>
						<?php include 'cari_g_nilai2.php'; ?>
						<a href="./../admin_g.php?page=g_nilai_form">
							<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
						</a>
												<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
							<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:12px;">
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
								<td width="1%">OPSI</td>	
							</tr>
								<?php
									$cari	= $_POST['cari']; 
									$query 	= "SELECT * FROM nilai a, guru b, siswa c, standar_kompetensi d, kompetensi_keahlian e 
									WHERE a.nisn LIKE '%$cari%' AND a.nisn=c.nisn AND a.id_guru=b.id_guru AND a.id_sk=d.id_sk AND c.id_kk=e.id_kk AND a.id_guru='$_SESSION[id_user]'";
									
									$result = mysql_query($query);
				
									function back_g_nilai(){echo '<meta http-equiv="refresh" content="0,./../admin_sw.php?page=g_nilai">';}

									if($cari==''){
										back_g_nilai();}
				
									else if(mysql_num_rows($result)==0){
										echo '<script type="text/javascript"> alert ("Data Pencarian Tidak Ditemukan!"); </script>';
										back_g_nilai();}

									else{while ($row = mysql_fetch_array($result)) {
								?>
							<tr style="font-size:12px;">
								<td  style="padding-left:5px; text-align:center;"><?php echo $row[1];?></td>
								<td  style="padding-left:5px;"><?php echo $row[14];?></td>
								<td  style="padding-left:5px;"><?php echo $row[24];?></td>
								<td  style="padding-left:5px; text-align:center;"><?php echo $row[2];?></td>
								<td  style="padding-left:5px;"><?php echo $row[8];?></td>
								<td  style="padding-left:5px; text-align:center;"><?php echo $row[9];?></td>
								<td  style="padding-left:5px; text-align:center;"><?php echo $row[3];?></td>
								<td  style="padding-left:5px;"><?php echo $row[20];?></td>
								<td  style="padding-left:5px; text-align:center;"><?php echo $row[4];?></td>
								<td  style="padding-left:5px; text-align:center;"><?php echo $row[5];?></td>
								<td  style="text-align:center;">
									<a href="./../admin_g.php?page=update_g_nilai&&id_update=<?php echo $row[0]; ?>">
										<img src="./../img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
									<a href="./../act/delete_g_nilai.php?id_delete=<?php $row[0] ?>" onClick="return confirm('HAPUS DATA NILAI <?php echo $row[1];?> ?');">
										<img src="./../img/icon/png/remove.png" height="15" width="15" style="margin:5px;"></a>
								</td>
							</tr>
								<?php }} ?>
						</table>
					</div>
				</div>
				<div class="content-box-l">
					<div class="box-title2">ARTIKEL SEKOLAH</div>
					<div class="box2">
						<a href="#"><strong>SEPUTAR SMK MHI</strong><br>Sekolah SMK Mulia Hati Insani</a>
					</div>
				</div>
			</div>
			<?php include './../includes/footer.php';?> 
		</div>
	</body>
</html>