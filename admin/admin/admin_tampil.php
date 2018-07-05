<?php
	if(!defined("INDEX")) die("---");
	
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasihapus(){
 			tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">akun admin</h2>
<a href="?tampil=admin_tambah" class="btn btn-primary">Tambah Admin</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>username</th>
		<th>password</th>
		<th>nama</th>
		<th></th>>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM user") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
			$password = md5($data['password']);
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['username']; ?> </td>
		<td> <?= $password; ?> </td>
		<td> <?= $data['nama']; ?> </td>
		
		<td> 
			<a href="?tampil=admin_edit&id_user=<?= $data['id_user']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a onclick="return konfirmasihapus()" href="?tampil=admin_hapus&id_user=<?= $data['id_user']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>