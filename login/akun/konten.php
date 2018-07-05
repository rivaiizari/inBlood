<?php
	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "beranda";
	
	if( $tampil == "beranda" )		include("beranda.php");	
	elseif( $tampil == "keluar" )	include("keluar.php");
	
	
	
	elseif( $tampil == "akun" )				include("akun/akun_edit.php");
	elseif( $tampil == "akun_editproses" )	include("akun/akun_editproses.php");
	
	
	// elseif( $tampil == "pesan" )					include("pesan/pesan_tampil.php");
	// elseif( $tampil == "pesan_balas" )			include("pesan/pesan_balas.php");
	// elseif( $tampil == "pesan_balasproses" )		include("pesan/pesan_balasproses.php");	
	// elseif( $tampil == "pesan_hapus" )			include("pesan/pesan_hapus.php");

	
	elseif( $tampil == "user_edit" ) 			include("user/user_edit.php");
	elseif( $tampil == "user_editproses" )		include("user/user_editproses.php");
	
	else echo"Konten tidak ada";
?>