<?php
	if(!defined("INDEX")) die("---");
	
?>

<h2 class="sub-header">Diagram Darah</h2>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Profinsi</th>
		<?php 
			$no=1;
			$tampil = mysqli_query($koneksi, "SELECT * FROM jdarah order by nama asc") or die(mysqli_error($koneksi));
				while($data = mysqli_fetch_array($tampil)){
				?>
					<th><?= $data['nama']; ?></th>
				<?php 
					$no++;
					} 
				?>
	</tr>
	
	<?php
		$no=1;


		$tampil = mysqli_query($koneksi, "SELECT rs.nama as namars, jdarah.nama as namajdarah FROM rs, darah , akun, Profinsi, jdarah where darah.idrs = rs.idrs ") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['namars']; ?> </td>
		
		<?php 
				$tam = mysqli_query($koneksi, "SELECT nama as goldarah FROM jdarah order by nama asc") or die(mysqli_error($koneksi));
				while($pdata = mysqli_fetch_array($tam)){

				$namadar = $pdata['goldarah'];
				///////////////////////////////

				$tampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jumlahdarahrs FROM rs , darah,  akun, jdarah ") or die(mysqli_error($koneksi));
			while($data = mysqli_fetch_array($tampil)){
		 ?>
		 <td><td> <?= $data['jumlahdarahrs']; ?> </td></td>
		 <?php 
				}
				} 
		?>
	</tr>
	
	<?php 
			
		} 
	?>
	
</table>