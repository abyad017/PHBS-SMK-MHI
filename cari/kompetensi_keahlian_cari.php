<?php
	include 'includes/c-session_start.php';
	include './../conf/connect.php';
?>

<html>
	<head>
		<title>Pencarian Data Kompentensi Keahlian | PHBS - SMK MHI</title>

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
						<?php include 'cari_kompetensi_keahlian2.php'; ?>
						<a href="./../admin.php?page=kompetensi_keahlian_form">
							<input class="button" type="submit" style="background-color:#fdf2f2; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
						</a>
						<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
							<tr bgcolor="silver" style="text-align:center; font-weight:bold; font-size:14px;">
								<td width="5%">ID KOMP. KEAHLIAN</td>
								<td width="2%">ID DIKLAT</td>
								<td width="12%">KOMP. KEAHLIAN</td>
								<td width="5%">OPSI</td>	
							</tr>
								<?php
									$cari	= $_POST['cari']; 
									$query 	= "SELECT * FROM kompetensi_keahlian WHERE nama LIKE '%$cari%'";
									$result = mysql_query($query);
					
									function back_kompetensi_keahlian(){echo '<meta http-equiv="refresh" content="0,./../admin.php?page=kompetensi_keahlian">';}

									if($cari==''){
										back_kompetensi_keahlian();}
				
									else if(mysql_num_rows($result)==0){
										echo '<script type="text/javascript"> alert ("Data Pencarian Tidak Ditemukan!"); </script>';
										back_kompetensi_keahlian();}

									else{while ($row = mysql_fetch_array($result)) {
								?>
							<tr style="font-size:14px;">
								<td  style="padding-left:5px; text-align:center;"><?php echo $row[0];?></td>
								<td  style="padding-left:5px; text-align:center;"><?php echo $row[1];?></td>
								<td  style="padding-left:5px;"><?php echo $row[2];?></td>
								<td  style="text-align:center;">
									<a href="./../admin.php?page=update_kompetensi_keahlian&&id_update=<?php echo $row[0]; ?>">
										<img src="./../img/icon/png/pencil.png" height="15" width="15" style="margin:5px;"></a>
									<a href="./../act/delete_kompetensi_keahlian.php?id_delete=<?php echo $row[0]; ?>" onClick="return confirm('HAPUS DATA <?php echo $row[0];?> ?');">
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