<?php
	if(!defined("INDEX")) die("---");
?>

<h2  class="sub-header">Your Posision Company 
<b style="color: red"><?php echo $_SESSION['nama']; ?></b></h2>
<h4>Please wait for the moment</h4>
<?php 
	$idrs=$_SESSION['idrs'];

	$tampil = mysqli_query($koneksi, "SELECT alamatmap FROM  rs where idrs=$idrs limit 1" ) or die(mysqli_error($koneksi));
	while($data = mysqli_fetch_array($tampil)){
	 ?>
	<?= $data['alamatmap']; ?>
	 <?php } ?>