<?php
	if(!defined("INDEX")) die("---");
	
	// include("../lib/fungsi_tglindonesia.php");
?>

<h2 class="sub-header">Data darah di profinsi</h2>


<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>PROFINSI</th>
		<th>darah A</th>
		<th>darah A+</th>
		<th>darah B</th>
		<th>darah B+</th>
		<th>darah O</th>
		<th>darah O+</th>
		<th>darah AB</th>
		<th>total jum gol</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM profinsi") or die(mysqli_error($koneksi));
		
		while($data = mysqli_fetch_array($tampil)){	
		$idprof= $data['idprof'];	
	?>
	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['namaprof']; ?></td>
		<td> <?php
			$hasil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jum from darah , akun, rs where darah.nip = akun.nip && akun.idjdarah = '1' && darah.idrs = rs.idrs && rs.idprof='$idprof' && darah.statusex='bl'");
			while($isi = mysqli_fetch_array($hasil)){	
		 ?> 
		 <?= $isi['jum'];
		 } ?>
		 </td>
		 <td> <?php
			$hasil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jum from darah , akun, rs where darah.nip = akun.nip && akun.idjdarah = '2' && darah.idrs = rs.idrs && rs.idprof='$idprof' && darah.statusex='bl'");
			while($isi = mysqli_fetch_array($hasil)){	
		 ?> 
		 <?= $isi['jum'];
		 } ?></td>
		<td> <?php
			$hasil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jum from darah , akun, rs where darah.nip = akun.nip && akun.idjdarah = '3' && darah.idrs = rs.idrs && rs.idprof='$idprof' && darah.statusex='bl'");
			while($isi = mysqli_fetch_array($hasil)){	
		 ?> 
		 <?= $isi['jum'];
		 } ?></td>
		 <td> <?php
			$hasil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jum from darah , akun, rs where darah.nip = akun.nip && akun.idjdarah = '4' && darah.idrs = rs.idrs && rs.idprof='$idprof'&& darah.statusex='bl'");
			while($isi = mysqli_fetch_array($hasil)){	
		 ?> 
		 <?= $isi['jum'];
		 } ?></td>
		 <td> <?php
			$hasil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jum from darah , akun, rs where darah.nip = akun.nip && akun.idjdarah = '5' && darah.idrs = rs.idrs && rs.idprof='$idprof' && darah.statusex='bl'");
			while($isi = mysqli_fetch_array($hasil)){	
		 ?> 
		 <?= $isi['jum'];
		 } ?></td>
		 <td> <?php
			$hasil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jum from darah , akun, rs where darah.nip = akun.nip && akun.idjdarah = '6' && darah.idrs = rs.idrs && rs.idprof='$idprof'&& darah.statusex='bl' ");
			while($isi = mysqli_fetch_array($hasil)){	
		 ?> 
		 <?= $isi['jum'];
		 } ?></td>
		 <td> <?php
			$hasil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jum from darah , akun, rs where darah.nip = akun.nip && akun.idjdarah = '7' && darah.idrs = rs.idrs && rs.idprof='$idprof' && darah.statusex='bl'");
			while($isi = mysqli_fetch_array($hasil)){	
		 ?> 
		 <?= $isi['jum'];
		 } ?></td>
		 <!-- total setiap profinsi -->
		<td><font style="color: green; font-weight: bold; text-align: center"> <?php
			$hasil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jum from darah, rs where  darah.idrs = rs.idrs && rs.idprof='$idprof' && darah.statusex='bl'");
			while($isi = mysqli_fetch_array($hasil)){	
		 ?> 
		 <?= $isi['jum'];
		 } ?></font></td>
		
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>