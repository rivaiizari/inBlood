<?php
	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "home";
?>

<div class='box'>
	
<?php	
	 if( $tampil == "home" )		include("konten/home.php");	

	 elseif( $tampil == "caridarah" )		include("caridarah.php");	
	 elseif( $tampil == "halaman" )			include("konten/halaman.php");
	 elseif( $tampil == "galeri" )			include("konten/galeri.php");
	 elseif( $tampil == "artikel_detail" )	include("konten/artikel_detail.php");
	 elseif( $tampil == "kontak" )			include("konten/kontak.php");
	 elseif( $tampil == "kontak_proses" )	include("konten/kontak_proses.php");
	 elseif( $tampil == "pencarian" )		include("konten/pencarian.php");
	 elseif( $tampil == "komentar_proses" )	include("konten/komentar_proses.php");
	 elseif( $tampil == "abaut" )			include("konten/abaut.php");
	 elseif( $tampil == "caridetail" )		include("konten/caridetail.php");
	 else echo"Halaman tidak ditemukan";
?>

</div>