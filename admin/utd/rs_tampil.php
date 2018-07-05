<?php
	if(!defined("INDEX")) die("---");
	
?>

<h2 class="sub-header">Diagram Darah</h2>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Profinsi</th>
		<th>Instansi</th>
		<th>A</th>
		<th>A+</th>
		<th>B</th>
		<th>B+</th>
		<th>O</th>
		<th>O+</th>
		<th>AB</th>
	</tr>
	
	<?php
		$no=1;

		$tampil = mysqli_query($koneksi, "SELECT rs.idrs as idrss,rs.nama as namars, profinsi.namaprof as namaprof from rs, profinsi where rs.idprof = profinsi.idprof") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['namaprof']; ?> </td>
		<td> <?= $data['namars']; ?> </td>
		
		
		<?php 
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jumlahdarahrs FROM rs , darah,  akun where darah.idrs=rs.idrs && darah.nip=akun.nip && darah.idrs='$data[idrss]' && akun.idjdarah='1' && darah.statusex='bl'") or die(mysqli_error($koneksi));
			while($jumdata = mysqli_fetch_array($jumtampil)){
		 ?>
		 <td> <?= $jumdata['jumlahdarahrs']; ?> </td>
		 <?php 
				
				} 
		?>

		<?php 
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jumlahdarahrs FROM rs , darah,  akun where darah.idrs=rs.idrs && darah.nip=akun.nip && darah.idrs='$data[idrss]' && akun.idjdarah='2' && darah.statusex='bl'") or die(mysqli_error($koneksi));
			while($jumdata = mysqli_fetch_array($jumtampil)){
		 ?>
		 <td> <?= $jumdata['jumlahdarahrs']; ?> </td>
		 <?php 
				
				} 
		?>

		<?php 
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jumlahdarahrs FROM rs , darah,  akun where darah.idrs=rs.idrs && darah.nip=akun.nip && darah.idrs='$data[idrss]' && akun.idjdarah='3' && darah.statusex='bl'") or die(mysqli_error($koneksi));
			while($jumdata = mysqli_fetch_array($jumtampil)){
		 ?>
		 <td> <?= $jumdata['jumlahdarahrs']; ?> </td>
		 <?php 
				
				} 
		?>
		<?php 
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jumlahdarahrs FROM rs , darah,  akun where darah.idrs=rs.idrs && darah.nip=akun.nip && darah.idrs='$data[idrss]' && akun.idjdarah='4' && darah.statusex='bl'") or die(mysqli_error($koneksi));
			while($jumdata = mysqli_fetch_array($jumtampil)){
		 ?>
		 <td> <?= $jumdata['jumlahdarahrs']; ?> </td>
		 <?php 
				
				} 
		?>
		<?php 
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jumlahdarahrs FROM rs , darah,  akun where darah.idrs=rs.idrs && darah.nip=akun.nip && darah.idrs='$data[idrss]' && akun.idjdarah='5' && darah.statusex='bl'") or die(mysqli_error($koneksi));
			while($jumdata = mysqli_fetch_array($jumtampil)){
		 ?>
		 <td> <?= $jumdata['jumlahdarahrs']; ?> </td>
		 <?php 
				
				} 
		?>
		<?php 
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jumlahdarahrs FROM rs , darah,  akun where darah.idrs=rs.idrs && darah.nip=akun.nip && darah.idrs='$data[idrss]' && akun.idjdarah='6' && darah.statusex='bl'") or die(mysqli_error($koneksi));
			while($jumdata = mysqli_fetch_array($jumtampil)){
		 ?>
		 <td> <?= $jumdata['jumlahdarahrs']; ?> </td>
		 <?php 
				
				} 
		?>

		<?php 
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jumlahdarahrs FROM rs , darah,  akun where darah.idrs=rs.idrs && darah.nip=akun.nip && darah.idrs='$data[idrss]' && akun.idjdarah='7' && darah.statusex='bl'") or die(mysqli_error($koneksi));
			while($jumdata = mysqli_fetch_array($jumtampil)){
		 ?>
		 <td> <?= $jumdata['jumlahdarahrs']; ?> </td>
		 <?php 
				
				} 
		?>


	</tr>
	
	<?php 
		$no++;
		} 
	?>
	
</table>