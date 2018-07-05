<?php
	if(!defined("INDEX")) die("---");
	
	
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasihapus(){
 			tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">akun Useer</h2>
<a href="?tampil=akun_tambah" class="btn btn-primary">Tambah User</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>nip</th>
		<th>nama</th>
		<th>telp</th>
		<th>alamat</th>
		<th>Gol Darah</th>
		<th>Banyak Donor</th>
		<th></th>

	</tr>
	
	<?php
		$no=1;
		
		$tampil = mysqli_query($koneksi, "SELECT jdarah.nama as namadarah, akun.nip as nip, akun.nama as namaakun, akun.telp as telpakun, akun.email as emailakun, akun.alamat as alamatakun, akun.agama as agamaakun, akun.tempatlahir as tempatlahirakun, akun.tgllahir as tgllahirakun, akun.jenisk as jeniskakun, akun.banyakdonor as banyakdonorakun, akun.username as usernameakun, akun.password as passwordakun FROM akun left join jdarah on akun.idjdarah = jdarah.idjdarah") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
			$password = md5($data['passwordakun']);
			// $tanggal = tgl_indonesia($data['tanggal']);
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['nip']; ?></td>
		<td> <?= substr($data['namaakun'], 0,15); ?> </td>
		<td> <?= $data['telpakun']; ?> </td>
		
		<td> <?= substr($data['alamatakun'], 0,15); ?>.. </td>
		
		<td> <?= $data['namadarah']; ?> </td>
		<td> <?= $data['banyakdonorakun']; ?> </td>
		<td> 
			<a href="?tampil=akun_edit&nip=<?= $data['nip']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a onclick="return konfirmasihapus()"href="?tampil=akun_hapus&nip=<?= $data['nip']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>

<?php 
	$artikel = mysqli_query($koneksi, "SELECT count(nip) as jum from akun ");
	$data = mysqli_fetch_array($artikel);
 ?>
<u>Junlah Member yang dimiliki  <font style="color: red; font-weight: bold;"> <?= $data['jum']; ?></font> orang</u>


