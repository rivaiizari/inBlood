<?php
	if(!defined("INDEX")) die("---");
?>

<h2  class="sub-header">Selamat Datang di Halaman Opeator kerjasama dengan in Blood Indonesia 
Hay..<b style="color: red"><?php echo $_SESSION['nama']; ?></b></h2>


<h2  class="sub-header">Your Posision Instansi 
<b style="color: red"><?php echo $_SESSION['nama']; ?></b></h2>
<?php 
	$idrs=$_SESSION['idrs'];

	$tampil = mysqli_query($koneksi, "SELECT alamatmap FROM  rs where idrs=$idrs limit 1" ) or die(mysqli_error($koneksi));
	while($data = mysqli_fetch_array($tampil)){
	 ?>
	
	<iframe src="<?= $data['alamatmap']; ?>" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	 <?php } ?>