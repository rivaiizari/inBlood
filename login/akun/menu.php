<?php
	if(!defined("INDEX")) die("---");
?>
<script type="text/javascript" language="JavaScript">
    function konfirmasiexit(){
      tanya = confirm("Anda Yakin keluar dari sini?");
      if (tanya == true) return true;
      else return false;
    }</script>
<nav class="navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
	<div class="navbar-header">
		<div class="col-md-1">
			&nbsp;
		</div>
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="?beranda">In Blood</a>
			<!--Warna navigasi 
				background-color=>bootstrap.css>4592
				color=>bootstrp.css>4595
		-->
		</div>	
		</div>

	<!-- batas -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li>
			<a class="navbar-brand">Halaman Profil Anggota in Blood </a>
			<a class="nav navbar-brand navbar-nav navbar-center"> Hellow,<?= $_SESSION['username']; ?></a>
			
			</li>
		</ul>

		<!-- sistem pencarian nav kanan -->
		

		<!-- baru -->
		<ul class="nav navbar-nav navbar-right">
			<li><a href="../../" target="blank">		Preview	</a></li>
			<li><a href="?tampil=user_edit">		Profil	</a></li>
			<li><a onclick="return konfirmasiexit()" href="?tampil=keluar" >			Keluar	</a></li>
			<li>&nbsp;</li>

		</ul>
        
	</div>
	</div>
	</div>
		<div class="colapse bs-example-navbar-collapse" id="bs-example-navbar-collapse-1">
	</div>

</nav>