<?php
	if(!defined("INDEX")) die("---");

	
	 !empty($_SESSION['status']);
	 !empty($_SESSION['nama']);

	  $sstatus=!empty($_SESSION['status']);
	

	 include("lib/koneksi.php");
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
			<a class="navbar-brand">IN BLOOD</a>
			<!--Warna navigasi 
				background-color=>bootstrap.css>4592
				color=>bootstrp.css>4595
		-->
		</div>	
		</div>

	<!-- batas -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			
<?php
	$menu = mysqli_query($koneksi, "select * from menu order by urutan");
	while($data = mysqli_fetch_array($menu)){
		$submenu = mysqli_query($koneksi, "select * from submenu where id_menu='$data[id_menu]'");
		$jmlsub = mysqli_num_rows($submenu);	
		if($jmlsub < 1){
?>
			<li><a href="<?= $data['link']; ?>"> <?= $data['judul']; ?> </a></li>
<?php
		}else{
?>
		<li class="dropdown"> 
			<a href="<?= $data['link']; ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?= $data['judul']; ?> <span class="caret"></span></a>
			<ul class="dropdown-menu">
		<?php
			while($datasub = $submenu->fetch_array()){
		?>			
			<li><a href="<?= $datasub['link']; ?>"> <?= $datasub['judul']; ?> </a></li>
		<?php
			}
		?>
			</ul>
		</li>

<?php	
		}
	}
?>	
		</ul>

		<!-- sistem pencarian nav kanan -->
		

		<!-- baru -->
		<ul class="nav navbar-nav navbar-right">
			<li>
				<form method="post" action="?tampil=pencarian" class="navbar-form navbar-left" role="search""> <!-- pull-right -->
			<div class="form-group">
				<input type="text" name="kata" placeholder="Cari artikel..." class="form-control"> 
			</div>
				<input type="submit" value="Cari" class="btn btn-default" btn-default">
		</form>
			</li>
			<li><a href="?tampil=abaut">Info<span class="sr-only">(current)</span></a></li>
			<?php 
			if($sstatus==""){
			 ?><li><a href="login/index.php">Login</a></li>
			<?php }else{ 
				  $snama =($_SESSION['nama']);
				  $sstatus =($_SESSION['status']);
				?>

			 	<li class="dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            	<span class="glyphicon glyphicon-user "><?= $snama; ?><b ></b> </span>
            	<span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
           		<ul class="dropdown-menu">
           			<?php 
           				if($sstatus=="admin"){
           					$linkstatus="admin";
           				}else{
           					$linkstatus="login";
           				}

           			 ?>
            		<li><a href="<?= $linkstatus; ?>">status as <?= $sstatus; ?> </a></li>
            		<li><a><?= $snama; ?></a></li>
            		<li role="separator" class="divider"></li>
            		<li><a onclick="return konfirmasiexit()" href="login/logout.php">Logout</a></li>
           		</ul>
       		</li>
			 
			<?php } ?>
			<li>&nbsp;</li>
		</ul>
        
	</div>
	</div>
	</div>
		<div class="colapse bs-example-navbar-collapse" id="bs-example-navbar-collapse-1">
	</div>

</nav>
