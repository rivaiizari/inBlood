<?php
	if(!defined("INDEX")) die("---");

	$rs = mysqli_query($koneksi, "select * from rs where idrs='$_GET[idrs]'");
	$data = mysqli_fetch_array($rs);
	$alamatmap = $data['alamatmap'];
?>

<div class="row">
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Cari Darah</li>
		<li class="active">Detail Cari Darah</li>
	</ul>
	
	<div class="artikel">
		<h2>Detail Cari Darah</h2>
		Tentang RS/UTD
	</div>


<!-- hasil cari -->
	<div class="row">
		<table class="table table-striped">
			
	<?php
		$idrs =$_GET['idrs']; 
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT profinsi.namaprof as namaprofinsi, rs.nama as namars, rs.telp as telprs, rs.email as emailrs, rs.alamat as alamatrs FROM rs inner join profinsi where profinsi.idprof=rs.idprof && rs.idrs = '$_GET[idrs]'") or die(mysqli_error($koneksi));
		$data = mysqli_fetch_array($tampil)
			
	?>
				
				<tr >
					<th>NAMA</th>
					<th>= <?= $data['namars']; ?></th>
					<td rowspan="5"><iframe src="<?php echo $alamatmap; ?>" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></td>
				</tr>
				<tr>
					<th>TELP</th>
					<th>= <?= $data['telprs']; ?></th>
				</tr>
				<tr>
					<th>EMAIL</th>
					<th>= <?= $data['emailrs']; ?></th>
				</tr>
				<tr>
					<th>ALAMAT</th>
					<th>= <?= $data['alamatrs']; ?></th>
				</tr>
				<tr>
					<th>PROFINSI</th>
					<th>= <?= $data['namaprofinsi']; ?></th>
				</tr>
				
				<?php 

	?>
			

	</table>
	<hr style="color: red"><hr style="color: red">
	<ul class="breadcrumb">
		<li>Instansi</li>
		<li class="active"><?= $data['namars']; ?></li>
		<li class="active">Detail Cari Darah</li>
	</ul>
	<table class="table table-striped">
		<tr>
			<th>Gol Darah</th>
			<th>A</th>
			<th>A Plus</th>
			<th>B</th>
			<th>B Plus</th>
			<th>O</th>
			<th>O Plus</th>
			<th>AB</th>
		</tr>
		<tr>
			<th>Sejumlah</th>
			<td> <?php
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jume from darah ,akun where darah.nip=akun.nip &&  akun.idjdarah = '1' && darah.idrs='$_GET[idrs]' && darah.status ='free' && darah.statusex='bl'") or die(mysql_error());
			$jumdata  	= mysqli_fetch_array($jumtampil);
		 	
					?> <font style="font-weight: bold;"><?= $jumdata['jume']; ?></font><?php
				
		 	?>
		 	</td>

		 	<td> <?php
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jume from darah ,akun where darah.nip=akun.nip &&  akun.idjdarah = '2' && darah.idrs='$_GET[idrs]' && darah.status ='free'&& darah.statusex='bl'") or die(mysql_error());
			$jumdata  	= mysqli_fetch_array($jumtampil);
		 	
					?> <font style="font-weight: bold;"><?= $jumdata['jume']; ?></font><?php
		 	?>
		 	</td>

		 	<td> <?php
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jume from darah ,akun where darah.nip=akun.nip &&  akun.idjdarah = '3' && darah.idrs='$_GET[idrs]' && darah.status ='free' && darah.statusex='bl'") or die(mysql_error());
			$jumdata  	= mysqli_fetch_array($jumtampil);
		 	
					?> <font style="font-weight: bold;"><?= $jumdata['jume']; ?></font><?php
		 	?>
		 	</td>

		 	<td> <?php
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jume from darah ,akun where darah.nip=akun.nip &&  akun.idjdarah = '4' && darah.idrs='$_GET[idrs]' && darah.status ='free'&& darah.statusex='bl'") or die(mysql_error());
			$jumdata  	= mysqli_fetch_array($jumtampil);
		 	
					?> <font style="font-weight: bold;"><?= $jumdata['jume']; ?></font><?php
		 	?>
		 	</td>

		 	<td> <?php
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jume from darah ,akun where darah.nip=akun.nip &&  akun.idjdarah = '5' && darah.idrs='$_GET[idrs]' && darah.status ='free' && darah.statusex='bl'") or die(mysql_error());
			$jumdata  	= mysqli_fetch_array($jumtampil);
		 	
					?> <font style="font-weight: bold;"><?= $jumdata['jume']; ?></font><?php
		 	?>
		 	</td>

		 	<td> <?php
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jume from darah ,akun where darah.nip=akun.nip &&  akun.idjdarah = '6' && darah.idrs='$_GET[idrs]' && darah.status ='free'&& darah.statusex='bl'") or die(mysql_error());
			$jumdata  	= mysqli_fetch_array($jumtampil);
		 	
					?> <font style="font-weight: bold;"><?= $jumdata['jume']; ?></font><?php
		 	?>
		 	</td>

		 	<td> <?php
			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jume from darah ,akun where darah.nip=akun.nip &&  akun.idjdarah = '7' && darah.idrs='$_GET[idrs]' && darah.status ='free'&& darah.statusex='bl'") or die(mysql_error());
			$jumdata  	= mysqli_fetch_array($jumtampil);
		 	
					?> <font style="font-weight: bold;"><?= $jumdata['jume']; ?></font><?php
		 	?>
		 	</td>
		 	
		 	


		</tr>>
	</table>
	</div>

</div>