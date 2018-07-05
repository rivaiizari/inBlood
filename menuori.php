<?php
	if(!defined("INDEX")) die("---");
?>	

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
	<div class="header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
			<div class="icon-bar"></div>
			<div class="icon-bar"></div>
			<div class="icon-bar"></div>
		</button>
	</div>
	<div id="navbar" class="collapse navbar-collapse">
		<ul class="nav navbar-nav container">
			
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
			<a href="<?= $data['link']; ?>" class="dropdown-toggle" data-toggle="dropdown"> <?= $data['judul']; ?> <span class="caret"></span></a>
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
?>		<div class="col-md-3">
		</div>
		<form method="post" action="?tampil=pencarian" class="search col-md-3"> <!-- pull-right -->
			<div class="input-group">
				<input type="text" name="kata" placeholder="Cari di sini..." class="form-control"> 
				<span class="input-group-btn">
					<input type="submit" value="Cari" class="btn">
				</span>
			</div>
		</form>

		<!-- baru -->
		<li><a href="?tampil=abaut">Info</a></li>
		<li><a href="login/index.php">Login</a></li>
        
	</div>
	</div>
</div>