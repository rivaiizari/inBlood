<?php 
	if(!defined("INDEX")) die("---");
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasihapus(){
 			tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Data Galeri</h2>

<a href="?tampil=galeri_tambah" class="btn btn-primary">Tambah Galeri</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Foto</th>
		<th>Judul Foto</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM galeri") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <img src="../gambar/galeri/<?= $data['gambar']; ?>" width="100"> </td>
		<td> <?= $data['judul']; ?> </td>
		<td> <?= $data['tanggal']; ?> </td>
		<td> 
			<a href="?tampil=galeri_edit&id=<?= $data['id_galeri']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a onclick="return konfirmasihapus()" href="?tampil=galeri_hapus&id=<?= $data['id_galeri']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>