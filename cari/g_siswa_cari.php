<?php
	include 'includes/c-session_start.php';
	include './../conf/connect.php';
?>
<html>
	<head>
		<title>Pencarian Data Siswa | PHBS - SMK MHI</title>
		
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
						<?php include 'cari_g_siswa2.php'; ?>
						<a href="#">
							<input class="button" type="submit" style="background-color:silver; font-size:12px; font-weight:bold; margin:10px 0px 10px 0px;" value="TAMBAH DATA">
						</a>
						<table width="100%" cellspacing="2" cellpadding="2" style="margin-bottom:20px;">
							<tr bgcolor="silver" style="text-align:center; font-weight:bold;">
								<td width="1%">NISN</td>
								<td width="13%">ID KOMP. KEAHLIAN</td>
								<td width="11%">NAMA SISWA</td>
								<td width="3%">ALAMAT</td>
								<td width="3%">TGL LAHIR</td>
								<!-- <td width="10%">FOTO</td> -->
							</tr>
								<?php
									$cari	= $_POST['cari']; 
									$query 	= "SELECT * FROM siswa WHERE nama LIKE '%$cari%'";
									$result = mysql_query($query);
									
									function back_g_siswa(){echo '<meta http-equiv="refresh" content="0,./../admin_g.php?page=g_siswa">';}

									if($cari==''){
										back_g_siswa();}
									
									else if(mysql_num_rows($result)==0){
										echo '<script type="text/javascript"> alert ("Data Pencarian Tidak Ditemukan!"); </script>';
										back_g_siswa();}

									else{while ($row = mysql_fetch_array($result)) {
								?>
							<tr>
								<td  style="padding-left:15px;"><?php echo $row[0];?></td>
								<td  style="padding-left:15px;"><?php echo $row[1];?></td>
								<td  style="padding-left:15px;"><?php echo $row[2];?></td>
								<td  style="padding-left:15px;"><?php echo $row[3];?></td>
								<td  style="padding-left:15px;"><?php echo $row[4];?></td>
							</tr>
								<?php }} ?>
						</table>
					</div>
				</div>
				<div class="content-box-l">
					<div class="box-title2">ARTIKEL SEKOLAH</div>
					<div class="box2">
						<a href="#"><strong>SEPUTAR SEKOLAH SMK MHI</strong><br>Sekolah SMK Mulia Hati Insani</a>
					</div>
				</div>
			</div>
			<?php include './../includes/footer.php';?> 
		</div>
	</body>
</html>