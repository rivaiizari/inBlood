<?php
	if(!defined("INDEX")) die("---");
?>

<div class="row">
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Cari Darah</li>
	</ul>
	
	<div class="artikel">
		<h2>Cari Darah</h2>
		Stok darah terbaru di UTD daerah terdekat
	</div>


<!-- ISI CARI -->
<div class="stok-title">Pencarian Berdasarkan Lokasi</div>
	<form name="caridarah" method="post" action="?tampil=caridarah">
		<input type="hidden" name="sortby" value="gol_darah">

		<!-- search form -->
		<table>
						<!-- select golongan -->
		<tr>
			<td width="144">Golongan Darah</td>
				<td width="330" align="left">
				<div class="input-control select" style="margin-bottom:0;">
				<select class="form-control input-sm" name="goldarah">
					<option value="0"  selected>Pilih Golongan Darah</option>
					<?php 
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM jdarah") or die(mysqli_error($koneksi));
						while($data = mysqli_fetch_array($tampil)){
					?>
					<option value="<?= $data['idjdarah']; ?>"  ><?= $data['nama']; ?></option>
					<?php 
						$no++;
						} 
					?>
									
				</select> 
			</div>
		</td>
		<td></td>
		</tr>

		<!-- space -->
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>

		<!-- select propinsi -->
		<tr>
			<td>Propinsi</td>
			<td align="left">
				<div  class="input-control select" style="margin-bottom:0;">
					<select class="form-control input-sm" name="propinsi">
						<option value="0" selected >Pilih Propinsi</option>
							<?php 
								$no=1;
								$tampil = mysqli_query($koneksi, "SELECT * FROM profinsi") or die(mysqli_error($koneksi));
								while($data = mysqli_fetch_array($tampil)){
							?>
						<option value="<?= $data['idprof']; ?>"><?= $data['namaprof']; ?></option>
							<?php 
								$no++;
								} 
							?>
					</select> 
				</div>
			</td>
			<td ></td>
		</tr>
			<!-- space -->
		<tr>
			<td colspan="3">&nbsp;</td>
		</tr>

			<!-- submit button -->
		<tr>
			<td>&nbsp;</td>
			<td align="left">
				<input name="cari" type="submit" value="Cari" style="margin-right:0;" />
			</td>
			<td></td>
		</tr>
		</table>	
	</form>
</div>
	<br><hr>

<!-- #endbaru -->
<div class="row">
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Cari Darah</li>
		<li class="active"><b>Hasil Pencarian</b></li>
	</ul>
		<form name="urut" method="post" action="?tampil=caridarah">
			<input type="hidden" name="gol_darah" value="###golongan-darah###">
			<input type="hidden" name="propinsi" value="###proponsi###">
			<input type="hidden" name="lokasi" value="">
			<div class="input-control select" style="padding-top: 0; padding-bottom:0; margin-bottom:0; text-align: right;">
				

		<?php
		
		if(isset($_POST['cari'])){

		?>
		Urutkan berdasarkan: 
				<select id="form-control input-sm" name="sortby" style="width:180px;" onchange="this.form.submit()">
					<option value="1" >Lokasi</option>
					<option value="2" >Jumlah Stok</option>
				</select> 
			</div>
		</form>
		<br>
<!-- hasil cari -->
	<div class="row">
		<table class="table table-striped">
			<tr>
				<th>No</th>
				<th>Lokasi</th>
				<th>Golongan Darah</th>
				<th>Jumlah Stok</th>
			</tr>
			<tr style="padding: 0px 0px;">
<!-- perintah databses -->
		<?php 
			$pprof =$_POST['propinsi']; 
			$pgoldarah =$_POST['goldarah']; 

			// order by
			if($_POST['sortby']==1){
			$sb="asc";
			}else{
			$sb="desc";
			}
		

		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT idrs , nama as namars  from rs where  rs.idprof = '$_POST[propinsi]' order by namars asc ") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_array($tampil)){
			$gidrs=$data['idrs'];
			

			$jumtampil = mysqli_query($koneksi, "SELECT count(darah.iddarah) as jume from darah ,akun where darah.nip=akun.nip &&  akun.idjdarah = '$_POST[goldarah]' && darah.idrs='$data[idrs]' && darah.status ='free'&& darah.statusex='bl'") or die(mysql_error());
			$jumdata  	= mysqli_fetch_array($jumtampil);


				if($jumdata['jume'] != 0){
		?>


		


				<td class="stok-centered-cell" style="padding: 0px 0px;"><?= $no; ?></td>
				<td style="padding: 0px 0px; width:50%">
					<div style="word-wrap: break-word; width: 70%;">
						<b><a href="?tampil=caridetail&idrs=<?=$data['idrs'];  ?>"><?= $data['namars']; ?></a></b> <br/>
								
						<br><a href="?tampil=caridetail&idrs=<?= $data['idrs'];  ?>">show detail</a>
						
					</div>
				</td>
				<td>
					<?php 
					$tampildar = mysqli_query($koneksi, "SELECT nama as namadar from jdarah where idjdarah='$pgoldarah'") or die(mysql_error());
					$datadar  	= mysqli_fetch_array($tampildar);
					 
					echo $datadar['namadar'];
					 ?>
				</td>
				<td>
				
				 <?= $jumdata['jume']; ?>
				</td>
			</tr>
				<?php 
			}
			$no++;
		} 
	?>
		</table>
	<p style="text-align:left;">&nbsp;<strong>1</strong>&nbsp;<a href="http://ayodonor.pmi.or.id/page/stok/2">2</a>&nbsp;<a href="http://ayodonor.pmi.or.id/page/stok/3">3</a>&nbsp;<a href="http://ayodonor.pmi.or.id/page/stok/2">&gt;</a>&nbsp;&nbsp;<a href="http://ayodonor.pmi.or.id/page/stok/7">Last &rsaquo;</a></p>

		
	<?php 	
	
	}
	 ?>

	</div>

</div>