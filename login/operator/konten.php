<?php
	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "beranda";
	
	if( $tampil == "beranda" )		include("beranda.php");	
	elseif( $tampil == "keluar" )	include("../keluar.php");
	
	
	
	elseif( $tampil == "artikel" )				include("artikel/artikel_tampil.php");
	elseif( $tampil == "artikel_tambah" )		include("artikel/artikel_tambah.php");
	elseif( $tampil == "artikel_tambahproses" )	include("artikel/artikel_tambahproses.php");
	elseif( $tampil == "artikel_edit" )			include("artikel/artikel_edit.php");
	elseif( $tampil == "artikel_editproses" )	include("artikel/artikel_editproses.php");
	elseif( $tampil == "artikel_hapus" )		include("artikel/artikel_hapus.php");
	
	elseif( $tampil == "darah" )				include("darah/darah_tampil.php");
	elseif( $tampil == "darah_tambah" )			include("darah/darah_tambah.php");
	elseif( $tampil == "darah_tambahproses" )	include("darah/darah_tambahproses.php");
	elseif( $tampil == "darah_edit" )			include("darah/darah_edit.php");
	elseif( $tampil == "darah_editproses" )		include("darah/darah_editproses.php");
	elseif( $tampil == "darah_hapus" )			include("darah/darah_hapus.php");
	
	elseif( $tampil == "akun" )				include("akun/akun_tampil.php");
	elseif( $tampil == "akun_tambah" )		include("akun/akun_tambah.php");
	elseif( $tampil == "akun_tambahproses" )	include("akun/akun_tambahproses.php");
	elseif( $tampil == "akun_edit" )			include("akun/akun_edit.php");
	elseif( $tampil == "akun_editproses" )	include("akun/akun_editproses.php");
	elseif( $tampil == "akun_hapus" )		include("akun/akun_hapus.php");

	elseif( $tampil == "profinsi" )				include("profinsi/profinsi_tampil.php");
	elseif( $tampil == "profinsi_tambah" )		include("profinsi/profinsi_tambah.php");
	elseif( $tampil == "profinsi_tambahproses" )	include("profinsi/profinsi_tambahproses.php");
	elseif( $tampil == "profinsi_edit" )			include("profinsi/profinsi_edit.php");
	elseif( $tampil == "profinsi_editproses" )	include("profinsi/profinsi_editproses.php");
	elseif( $tampil == "profinsi_hapus" )		include("profinsi/profinsi_hapus.php");

	// elseif( $tampil == "pesan" )					include("pesan/pesan_tampil.php");
	// elseif( $tampil == "pesan_balas" )			include("pesan/pesan_balas.php");
	// elseif( $tampil == "pesan_balasproses" )		include("pesan/pesan_balasproses.php");	
	// elseif( $tampil == "pesan_hapus" )			include("pesan/pesan_hapus.php");

	
	elseif( $tampil == "user_edit" ) 			include("user/user_edit.php");
	elseif( $tampil == "user_editproses" )		include("user/user_editproses.php");
	elseif( $tampil == "user_alamatmap" )		include("user/tempatmap.php");
	
	else echo"Konten tidak ada";
?>