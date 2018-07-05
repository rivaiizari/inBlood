<?php
	if(!defined("INDEX")) die("---");
	
	
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasihapus(){
 			tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">akun Operator</h2>
<a href="?tampil=operator_tambah" class="btn btn-primary">Tambah Operator</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>username</th>
		<th>password</th>
		<th>nama</th>
		<th>alamat</th>
		<th>telp</th>
		<th>email</th>
		<th>profinsi</th>
		<th></th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT profinsi.namaprof as namaprof,rs.idrs as idrs, rs.username as usernamers, rs.password as passwordrs, rs.nama as namars, rs.alamat as alamatrs, rs.alamatmap as alamatmaprs, rs.telp as telprs, rs.email as emailrs FROM rs inner join profinsi on rs.idprof = profinsi.idprof") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
			$password = md5($data['passwordrs']);
			// $tanggal = tgl_indonesia($data['tanggal']);
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['usernamers']; ?> </td>
		<td> <?= substr($password, 0,15); ?>.. </td>
		<td> <?= $data['namars']; ?> </td>
		<td> <?= substr($data['alamatrs'], 0,15); ?> </td>
		<td> <?= $data['telprs']; ?> </td>
		<td> <?= $data['emailrs']; ?> </td>
		<td> <?= $data['namaprof']; ?> </td>
		<td> 
			<a href="?tampil=operator_edit&idrs=<?= $data['idrs']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a onclick="return konfirmasihapus()" href="?tampil=operator_hapus&idrs=<?= $data['idrs']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
<?php 
	$artikel = mysqli_query($koneksi, "SELECT count(idrs) as jum from rs ");
	$data = mysqli_fetch_array($artikel);
 ?>
<u>Junlah Member yang dimiliki  <font style="color: red; font-weight: bold;"> <?= $data['jum']; ?></font> Instansi</u>