<?php
	if(!defined("INDEX")) die("---");
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasihapus(){
 			tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>	
<h2 class="sub-header">Data Halaman</h2>

<a href="?tampil=halaman_tambah" class="btn btn-primary">Tambah Halaman</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Judul Halaman</th>
		<th>Link Halaman</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM halaman") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['judul']; ?> </td>
		<td> ?tampil=halaman&id=<?= $data['id_halaman']; ?> </td>
		<td> 
			<a href="?tampil=halaman_edit&id=<?= $data['id_halaman']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a onclick="return konfirmasihapus()" href="?tampil=halaman_hapus&id=<?= $data['id_halaman']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>