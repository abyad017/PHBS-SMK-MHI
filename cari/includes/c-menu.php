<ul>
	<?php 	//Menu Umum > Awal
		if($_SESSION['level']==""){
	?>
	<li><a href="./../index.php?page=beranda">Beranda</a></li>
	<li><a href="#">Info</a>
		<ul style="left:30%;">
			<!-- <li style="width:100px;"><a href="./../index.php?page=bantuan">Bantuan</a></li> -->
			<li style="width:100px;"><a href="./../index.php?page=versi">Versi</a></li>
		</ul>
	</li>
	<li><a href="./../login.php">Login</a></li>
	<?php } //Menu Umum > Akhir ?>



	<?php 	//Menu Administrator > Awal
		if($_SESSION['level']=="Administrator"){
	?>
	<li><a href="./../admin.php?page=beranda">Beranda</a></li> 
	<li><a href="#">Administrasi</a>
		<ul style="left:15%;">		
			<li style="width:150px;"><a href="./../admin.php?page=siswa">Siswa</a>
				<ul style="left:108%;">
					<li style="width:100px;"><a href="./../admin.php?page=siswa">Lihat</a></li>
					<li style="width:100px;"><a href="./../admin.php?page=siswa_form">Input</a></li>
				</ul>
			</li>
			<li style="width:150px;"><a href="./../admin.php?page=guru">Guru</a>
				<ul style="left:108%;">
					<li style="width:100px;"><a href="./../admin.php?page=guru">Lihat</a></li>
					<li style="width:100px;"><a href="./../admin.php?page=guru_form">Input</a></li>
				</ul>
			</li>
			<li style="width:150px;"><a href="./../admin.php?page=nilai">Nilai</a>
				<ul style="left:108%;">
					<!-- <li style="width:170px;"><a href="./../admin.php?page=nilai">Nilai</a>
						<ul style="left:100%; top:0;"> -->
							<li style="width:100px;"><a href="./../admin.php?page=nilai">Lihat</a></li>
							<li style="width:100px;"><a href="./../admin.php?page=nilai_form">Input</a></li>
<!-- 						</ul>
					</li>
					<li style="width:170px;"><a href="#">Kompetensi</a>
						<ul style="left:100%; top:0;">
							<li style="width:100px;"><a href="./../admin.php?page=">Standar</a></li>
							<li style="width:100px;"><a href="./../admin.php?page=">Keahlian</a></li>
						</ul>
					</li> -->
				</ul>
			</li>
			<li style="width:150px;"><a href="./../admin.php?page=diklat">Diklat</a>
				<ul style="left:108%;">
					<li style="width:100px;"><a href="./../admin.php?page=diklat">Lihat</a></li>
					<li style="width:100px;"><a href="./../admin.php?page=diklat_form">Input</a></li>
				</ul>
			</li>
			<li style="width:150px;"><a href="#">Kompetensi</a>
				<ul style="left:108%;">
					<li style="width:100px;"><a href="./../admin.php?page=standar_kompetensi">Standar</a>
						<ul style="left:108%; top:0;">
							<li style="width:100px;"><a href="./../admin.php?page=standar_kompetensi">Lihat</a></li>
							<li style="width:100px;"><a href="./../admin.php?page=standar_kompetensi_form">Input</a></li>
						</ul>
					</li>
					<li style="width:100px;"><a href="./../admin.php?page=kompetensi_keahlian">Keahlian</a>
						<ul style="left:108%;">
							<li style="width:100px;"><a href="./../admin.php?page=kompetensi_keahlian">Lihat</a></li>
							<li style="width:100px;"><a href="./../admin.php?page=kompetensi_keahlian_form">Input</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li style="width:150px;"><a href="./../admin.php?page=wali">Wali Murid</a>
				<ul style="left:108%; top:0;">
					<li style="width:100px;"><a href="./../admin.php?page=wali">Lihat</a></li>
					<li style="width:100px;"><a href="./../admin.php?page=wali_form">Input</a></li>
				</ul>
			</li>
			<li style="width:150px;"><a href="#">Administrator</a>
				<ul style="left:108%;">
					<li style="width:170px;"><a href="./../admin.php?page=user">User</a>
						<ul style="left:100%; top:0;">
							<li style="width:100px;"><a href="./../admin.php?page=user">Lihat</a></li>
							<li style="width:100px;"><a href="./../admin.php?page=user_form">Input</a></li>
						</ul>
					</li>
					<li style="width:170px;"><a href="./../admin.php?page=level">Level Admin</a>
						<ul style="left:100%; top:0;">
							<li style="width:100px;"><a href="./../admin.php?page=level">Lihat</a></li>
							<li style="width:100px;"><a href="./../admin.php?page=level_form">Input</a></li>
						</ul>
					</li>
					<li style="width:170px;"><a href="./../admin.php?page=user_ch_pswd">Ganti DATA AKSES</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="./../admin.php?page=laporan">Laporan</a></li>
	<li><a href="#">Info</a>
		<ul style="left:30%;">
<!-- 			<li style="width:100px;"><a href="./../admin.php?page=bantuan">Bantuan</a></li> -->
			<li style="width:100px;"><a href="./../admin.php?page=versi">Versi</a></li>
		</ul>
	</li>
	<li><a href="./../act/logout.php">Logout</a></li>
	<?php } //Menu Administrator > Akhir ?>


	<?php //Menu Guru > Awal
		if($_SESSION['level']=="Guru"){
	?>
	<li><a href="./../admin_g.php?page=beranda">Beranda</a></li> 
	<li><a href="#">Administrasi</a>
		<ul style="left:15%;">
			<li style="width:150px;"><a href="./../admin_g.php?page=g_siswa">Siswa</a></li>
			<li style="width:150px;"><a href="./../admin_g.php?page=g_nilai">Nilai</a>
				<ul style="left:108%;">
					<!-- <li style="width:170px;"><a href="admin_g.php?page=g_nilai">Nilai</a>
						<ul style="left:100%; top:0;"> -->
							<li style="width:100px;"><a href="./../admin_g.php?page=g_nilai">Lihat</a></li>
							<li style="width:100px;"><a href="./../admin_g.php?page=g_nilai_form">Input</a></li>
			<!-- 			</ul>
					</li>
					<li style="width:170px;"><a href="#">Kompetensi</a>
						<ul style="left:100%; top:0;">
							<li style="width:100px;"><a href="./../admin_g.php?page=">Standar</a></li>
							<li style="width:100px;"><a href="./../admin_g.php?page=">Keahlian</a></li>
						</ul>
					</li> -->
				</ul>
			</li>
		</ul>
	</li>
	<li style="width:150px;"><a href="./../admin_g.php?page=user2_ch_pswd">Ganti Password</a></li>
	<li><a href="./../admin_g.php?page=g_laporan">Laporan</a></li>
	<li><a href="#">Info</a>
		<ul style="left:30%;">
			<!-- <li style="width:100px;"><a href="./../admin_g.php?page=bantuan">Bantuan</a></li> -->
			<li style="width:100px;"><a href="./../admin_g.php?page=versi">Versi</a></li>
		</ul>
	</li>
	<li><a href="./../act/logout.php">Logout</a></li>
	<?php } //Menu Guru > Akhir ?>


	<?php 	//Menu Siswa/Wali > Awal
		if(($_SESSION['level']=="Siswa") || ($_SESSION['level']=="Wali") ){
	?>
	<li><a href="./../admin_sw.php?page=beranda">Beranda</a></li> 
	<li style="width:150px;"><a href="./../admin_sw.php?page=user3_ch_pswd">Ganti Password</a></li>
	<li><a href="./../admin_sw.php?page=sw_laporan">Laporan</a></li>
	<li><a href="#">Info</a>
		<ul style="left:30%;">
<!-- 			<li style="width:100px;"><a href="./../admin_sw.php?page=bantuan">Bantuan</a></li> -->
			<li style="width:100px;"><a href="./../admin_sw.php?page=versi">Versi</a></li>
		</ul>
	</li>
	<li><a href="./../act/logout.php">Logout</a></li>
	<?php } //Menu Siswa/Wali > Akhir ?>
</ul>