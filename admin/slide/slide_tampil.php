<?php 
	if(!defined("INDEX")) die("---");
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasihapus(){
 			tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Data Silde</h2>

<a href="?tampil=slide_tambah" class="btn btn-primary">Tambah Slide</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>idslide</th>
		<th>gambar</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM slide") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['idslide']; ?> </td>
		<td> <img src="../gambar/slide/<?= $data['gambar']; ?>" width="100"> </td>
		<td> <?= $data['status']; ?> </td>
		<td> 
			<a href="?tampil=slide_edit&id=<?= $data['idslide']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a onclick="return konfirmasihapus()"href="?tampil=slide_hapus&id=<?= $data['idslide']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>