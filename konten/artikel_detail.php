<?php
	if(!defined("INDEX")) die("---");
	
	mysqli_query($koneksi, "update artikel set hits=hits+1 where id_artikel='$_GET[id]'");
	
	$artikel = mysqli_query($koneksi, "select * from artikel where id_artikel='$_GET[id]'");
	$data = mysqli_fetch_array($artikel);
	$isi = $data['isi'];
?>
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Artikel detail</li>
	</ul>
	
	<div class="artikel">
		<h2 class="judul"><?php echo $data['judul']; ?></h2>
		<?php  if($data['gambar']==""){
			;
		}else{
		?>
		<p>			
			<img  style="float: left; margin-right: 10px" src="gambar/artikel/<?php echo $data['gambar']; ?>" class="thumbnail" width="300px"  >
		<?php  } ?>	
			<p style="text-indent: 0.5in;"> <?php echo $isi; ?></p> 
		</p>
		?>
	</div>

<?php
	$komentar = mysqli_query($koneksi, "select * from komentar where id_artikel='$_GET[id]'");
	$jmlkomentar = $komentar->num_rows;
?>
	<h3><?php echo $jmlkomentar; ?> Komentar </h3>
	<hr>
<?php
	while($datakomen = $komentar->fetch_array()){
		$tgl_komen = tgl_indonesia($datakomen['tanggal']);
?>
	<div class="komentar">
		<h5><b><?php echo $datakomen['nama']; ?> - <?php echo $tgl_komen; ?></b></h5> 
		<p><?php echo $datakomen['komentar']; ?></p>
	</div>
	<hr>
<?php
	}
?>

<h3>Isi Komentar</h3>

<form method="post" action="?tampil=komentar_proses" id="formkomentar" class="form-horizontal well">
	<input type="hidden" name="id" value="<?php echo $data['id_artikel']; ?>">
	<div class="form-group">
		<label for="nama" class="control-label col-md-2">Nama</label>
		<div class="col-md-10">
			<input type="text" name="nama" id="nama" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="control-label col-md-2">Email</label>
		<div class="col-md-10">
			<input type="text" name="email" id="email" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label for="komentar" class="control-label col-md-2">Komentar</label>
		<div class="col-md-10">
			<textarea name="komentar" id="komentar" rows="8" class="form-control"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-10 col-md-offset-2">
			<input type="submit" value="Kirim Pesan" class="btn btn-primary">
		</div>
	</div>
</form>