<?php
	if(!defined("INDEX")) die("---");
	
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasihapus(){
 			tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Data Darah</h2>

<a href="?tampil=darah_tambah" class="btn btn-primary">Tambah darah</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Code darah</th>
		<th>jenis darah</th>
		<th>id Pendonor</th>
		<!-- <th>Instansi </th> -->
		<th>tgl masuk</th>
		<th>tanggal exp</th>
		<th>sisa waktu</th>>
		<th>status</th>
		<th></th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT darah.statusex as statusex, rs.nama as namars,jdarah.nama as namagoldarah, darah.iddarah as iddarah, darah.nip as nipdarah, darah.tglmasuk as tglmasuk, darah.tglexp as tglexp, darah.status as statusdarah  FROM darah, rs, akun, jdarah where  rs.idrs = darah.idrs && darah.nip = akun.nip && akun.idjdarah = jdarah.idjdarah && '$_SESSION[idrs]'=rs.idrs order by iddarah desc ") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['iddarah']; ?> </td>
		<td> <?= $data['namagoldarah']; ?> </td>
		<td> <?= $data['nipdarah']; ?> </td>
		<!-- <td> <?= $data['namars']; ?> </td> -->
		<td> <?= $data['tglmasuk']; ?> </td>
		<td> <?= $data['tglexp']; ?> </td>
		<td>
			<?php
				$d1 =new DateTime("Asia/Jakarta");
				$d2 =new DateTime($data['tglexp']);
			 	$sisa = $d2 ->diff ($d1);

			 	if($sisa->days==0){
			 		mysqli_query($koneksi, "update darah set statusex='ex' where iddarah='$data[iddarah]'");
			 	}
			 	if($data['statusex']=='ex'){
			 		echo "-";
			 	}
			 	echo $sisa->days; 
			 ?> Hari
		</td>
		<td style="font-weight: bold;"> <?php

		if($data['statusex']=="bl"){

			if($data['statusdarah']=="order"){
				?>
				<font style="color: red"><?= $data['statusdarah'] ?></font>
				<?php
			}else{
				?>
				<font style="color: green"><?= $data['statusdarah'] ?></font>
			<?php
			} 
		}elseif($data['statusex']=="ex"){
			?>
				<font style="color: red">EXPAITE</font>
			<?php
		}
			?>
			</td>

		<td> 
			<a href="?tampil=darah_edit&iddarah=<?= $data['iddarah']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a onclick="return konfirmasihapus()"href="?tampil=darah_hapus&iddarah=<?= $data['iddarah']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
<?php 
	$artikel = mysqli_query($koneksi, "SELECT count(iddarah) as jum from darah where status ='free' && '$_SESSION[idrs]'= idrs && statusex='bl'");
	$data = mysqli_fetch_array($artikel);
 ?>
<u> Sisa Junlah yang belum dipesan </u> <font style="color: green; font-weight: bold;"> <?= $data['jum']; ?> kantung darah</font> <br>
<?php 
	$artikel = mysqli_query($koneksi, "SELECT count(iddarah) as jum from darah where status ='order' && '$_SESSION[idrs]'= idrs && statusex='bl'");
	$data = mysqli_fetch_array($artikel);
 ?>
<u>Junlah yang dipesan </u> <font style="color: red; font-weight: bold;"> <?= $data['jum']; ?> kantung darah</font>