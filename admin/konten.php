<?php
	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "beranda";
	
	if( $tampil == "beranda" )		include("beranda.php");	
	elseif( $tampil == "keluar" )	include("keluar.php");
	
	elseif( $tampil == "menu" )					include("menu/menu_tampil.php");
	elseif( $tampil == "menu_tambah" )			include("menu/menu_tambah.php");
	elseif( $tampil == "menu_tambahproses" )	include("menu/menu_tambahproses.php");
	elseif( $tampil == "menu_edit" )			include("menu/menu_edit.php");
	elseif( $tampil == "menu_editproses" )		include("menu/menu_editproses.php");
	elseif( $tampil == "menu_hapus" )			include("menu/menu_hapus.php");
	
	elseif( $tampil == "submenu" )				include("submenu/submenu_tampil.php");
	elseif( $tampil == "submenu_tambah" )		include("submenu/submenu_tambah.php");
	elseif( $tampil == "submenu_tambahproses" )	include("submenu/submenu_tambahproses.php");
	elseif( $tampil == "submenu_edit" )			include("submenu/submenu_edit.php");
	elseif( $tampil == "submenu_editproses" )	include("submenu/submenu_editproses.php");
	elseif( $tampil == "submenu_hapus" )		include("submenu/submenu_hapus.php");
	
	elseif( $tampil == "halaman" )				include("halaman/halaman_tampil.php");
	elseif( $tampil == "halaman_tambah" )		include("halaman/halaman_tambah.php");
	elseif( $tampil == "halaman_tambahproses" )	include("halaman/halaman_tambahproses.php");
	elseif( $tampil == "halaman_edit" )			include("halaman/halaman_edit.php");
	elseif( $tampil == "halaman_editproses" )	include("halaman/halaman_editproses.php");
	elseif( $tampil == "halaman_hapus" )		include("halaman/halaman_hapus.php");
	
	elseif( $tampil == "artikel" )				include("artikel/artikel_tampil.php");
	elseif( $tampil == "artikel_tambah" )		include("artikel/artikel_tambah.php");
	elseif( $tampil == "artikel_tambahproses" )	include("artikel/artikel_tambahproses.php");
	elseif( $tampil == "artikel_edit" )			include("artikel/artikel_edit.php");
	elseif( $tampil == "artikel_editproses" )	include("artikel/artikel_editproses.php");
	elseif( $tampil == "artikel_hapus" )		include("artikel/artikel_hapus.php");
	
	elseif( $tampil == "galeri" )				include("galeri/galeri_tampil.php");
	elseif( $tampil == "galeri_tambah" )		include("galeri/galeri_tambah.php");
	elseif( $tampil == "galeri_tambahproses" )	include("galeri/galeri_tambahproses.php");
	elseif( $tampil == "galeri_edit" )			include("galeri/galeri_edit.php");
	elseif( $tampil == "galeri_editproses" )	include("galeri/galeri_editproses.php");
	elseif( $tampil == "galeri_hapus" )			include("galeri/galeri_hapus.php");
	
	elseif( $tampil == "pesan" )					include("pesan/pesan_tampil.php");
	elseif( $tampil == "pesan_balas" )			include("pesan/pesan_balas.php");
	elseif( $tampil == "pesan_balasproses" )		include("pesan/pesan_balasproses.php");	
	elseif( $tampil == "pesan_hapus" )			include("pesan/pesan_hapus.php");


	elseif( $tampil == "slide" )				include("slide/slide_tampil.php");
	elseif( $tampil == "slide_tambah" )			include("slide/slide_tambah.php");
	elseif( $tampil == "slide_tambahproses" )	include("slide/slide_tambahproses.php");
	elseif( $tampil == "slide_edit" )			include("slide/slide_edit.php");
	elseif( $tampil == "slide_editproses" )		include("slide/slide_editproses.php");
	elseif( $tampil == "slide_hapus" )			include("slide/slide_hapus.php");

	elseif( $tampil == "admin" )				include("admin/admin_tampil.php");
	elseif( $tampil == "admin_tambah" )			include("admin/admin_tambah.php");
	elseif( $tampil == "admin_tambahproses" )	include("admin/admin_tambahproses.php");
	elseif( $tampil == "admin_edit" )			include("admin/admin_edit.php");
	elseif( $tampil == "admin_editproses" )		include("admin/admin_editproses.php");
	elseif( $tampil == "admin_hapus" )			include("admin/admin_hapus.php");

	elseif( $tampil == "operator" )					include("operator/operator_tampil.php");
	elseif( $tampil == "operator_tambah" )			include("operator/operator_tambah.php");
	elseif( $tampil == "operator_tambahproses" )	include("operator/operator_tambahproses.php");
	elseif( $tampil == "operator_edit" )			include("operator/operator_edit.php");
	elseif( $tampil == "operator_editproses" )		include("operator/operator_editproses.php");
	elseif( $tampil == "operator_hapus" )			include("operator/operator_hapus.php");

	elseif( $tampil == "akun" )					include("akun/akun_tampil.php");
	elseif( $tampil == "akun_tambah" )			include("akun/akun_tambah.php");
	elseif( $tampil == "akun_tambahproses" )	include("akun/akun_tambahproses.php");
	elseif( $tampil == "akun_edit" )			include("akun/akun_edit.php");
	elseif( $tampil == "akun_editproses" )		include("akun/akun_editproses.php");
	elseif( $tampil == "akun_hapus" )			include("akun/akun_hapus.php");

	elseif( $tampil == "utdrs" )					include("utd/rs_tampil.php");
	elseif( $tampil == "utdprof" )					include("profinsi/profinsi_tampil.php");


	elseif( $tampil == "user_edit" ) 			include("user/user_edit.php");
	elseif( $tampil == "user_editproses" )		include("user/user_editproses.php");
	
	else echo"Konten tidak ada";
?>