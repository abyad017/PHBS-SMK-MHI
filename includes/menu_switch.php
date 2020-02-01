<?php 
	$page = $_GET['page'];
	switch ($page) {

		// Menu Switch Administrator > Awal
		case siswa 			: include('siswa.php'); break;
		case siswa_form		: include('siswa_form.php'); break;
		case update_siswa	: include('siswa_update.php'); break;

		case guru 			: include('guru.php'); break;
		case guru_form		: include('guru_form.php'); break;
		case update_guru	: include('guru_update.php'); break;

		case nilai 			: include('nilai.php'); break;
		case nilai_form		: include('nilai_form.php'); break;
		case update_nilai 	: include('nilai_update.php'); break;

		case diklat 		: include('diklat.php'); break;
		case diklat_form 	: include('diklat_form.php'); break;
		case update_diklat	: include('diklat_update.php'); break;							
		
		case kompetensi_keahlian 		: include('kompetensi_keahlian.php'); break;
		case kompetensi_keahlian_form	: include('kompetensi_keahlian_form.php'); break;														
		case update_kompetensi_keahlian	: include('kompetensi_keahlian_update.php'); break;
		
		case standar_kompetensi 		: include('standar_kompetensi.php'); break;
		case standar_kompetensi_form 	: include('standar_kompetensi_form.php'); break;
		case update_standar_kompetensi	: include('standar_kompetensi_update.php'); break;

		case wali 			: include('wali.php'); break;
		case wali_form		: include('wali_form.php'); break;
		case update_wali	: include('wali_update.php'); break;

		case user 			: include('user.php'); break;
		case user_form		: include('user_form.php'); break;
		case update_user	: include('user_update.php'); break;
		case level 			: include('level.php'); break;
		case level_form		: include('level_form.php'); break;
		case update_level	: include('level_update.php'); break;
		case user_ch_pswd	: include('user_ch_pswd.php'); break;
		
		case laporan		: include('laporan.php'); break;
		// Menu Switch Administrator > Akhir


		case bantuan		: include('bantuan.php'); break;
		case versi			: include('versi.php'); break;
		

		// Menu Switch Gurur > Awal		
		case g_siswa		: include('g_siswa.php'); break;
		
		case g_nilai 		: include('g_nilai.php'); break;
		case g_nilai_form	: include('g_nilai_form.php'); break;
		case update_g_nilai	: include('g_nilai_update.php'); break;

		case user2_ch_pswd	: include('user2_ch_pswd.php');break;

		case g_laporan		: include('g_laporan.php'); break;
		// Menu Switch Guru > Akhir		


		// Menu Switch Siswa/Wali > Awal
		case user3_ch_pswd	: include('user3_ch_pswd.php'); break;
		case sw_laporan		: include('sw_laporan.php'); break;
		case wm_laporan		: include('wm_laporan.php'); break;		
		// Menu Switch Administrator > Awal

		
		// Menu Switch Default			
		default 			: include('home.php'); break;}
?>