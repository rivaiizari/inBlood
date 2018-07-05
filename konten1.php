<?php
	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "home";
?>

<div class='box'>
	
<?php	
	 if( $tampil == "home" )		include("konten/home1.php");	
?>

</div>


	<div class="row">
	<!-- #baru -->
		<div class="theme-default">
			<?php include("konten/slideshow.php"); ?>
		</div>
	<!-- #endbaru -->
	</div>
	<div class="row">
		<div class="container">
			<div class="menu-utama">
				<?php include("konten/menuu.php"); ?>
			</div>	
		</div>
	</div>