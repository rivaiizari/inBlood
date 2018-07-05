

	<script type="text/javascript" src="plugin/fancybox/jquery.js"></script>
    <link rel="stylesheet" href="plugin/fancybox/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
    <script type="text/javascript" src="plugin/fancybox/jquery.fancybox.pack.js?v=2.1.0"></script>
<script type="text/javascript">
$(document).ready(function() {
<!-- langkah 2) inisilasisasi fancybox Simple image gallery. Uses default settings -->
  $('.fancybox').fancybox();
      });
</script>

<?php
	if(!defined("INDEX")) die("---");
?>
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Galeri foto</li>
	</ul>
	
	<div class="galeri">
		<div class="row">
<?php	
	$no = 1;
	$galeri = mysqli_query($koneksi, "select * from galeri order by id_galeri desc limit 12");
	while($data = mysqli_fetch_array($galeri)){
?>
		<div class="col-md-3">
			<a class="fancybox" href="gambar/galeri/<?php echo $data['gambar']; ?>" title="<?php echo $data['judul']; ?>">
				<img src="gambar/galeri/<?php echo $data['gambar']; ?>" width="100%" class="thumbnail" >
				<p align="center"> <?php echo $data['judul']; ?></p>
			</a>
		</div>
<?php
		if($no==4) echo"</div><div class='row'>";
		$no++;
	}
?>
		</div>
	</div>