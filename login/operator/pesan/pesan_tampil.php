<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Data Pesan</h2>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Subjek</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM pesan") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['nama']; ?> </td>
		<td> <?= $data['email']; ?> </td>
		<td> <a href='?tampil=pesan_balas&id=<?= $data['id_pesan']; ?>'> <?= $data['subjek']; ?> </a></td>
		<td> <?= $data['tanggal']; ?> </td>
		<td> 
			<a href="?tampil=pesan_hapus&id=<?= $data['id_pesan']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>