<?php
	if(!defined("INDEX")) die("---");
?>

<h2  class="sub-header">Selamat Datang di Halaman Anggota in Blood Indonesia</h2>

<ul class="breadcrumb">
	<li>Status</li>
	<li class="active"><b style="color: red"><?php echo $_SESSION['nama']; ?></b> with NIP <?php echo $_SESSION['nip']; ?></li>
</ul>
<div class="row">
		<table class="table table-striped">
			
	<?php
		$tampil = mysqli_query($koneksi, "SELECT darah.tglexp as tglexp, darah.statusex as statusex, akun.banyakdonor as banyakdonor FROM akun, darah  where darah.nip=akun.nip && akun.nip= '$_SESSION[nip]' order by darah.tglmasuk asc limit 1") or die(mysqli_error($koneksi));
		$data = mysqli_fetch_array($tampil)
			
	?>
				
			<tr >
				<th>Status Donor</th>
				<th>:
				<?php if($data['statusex']=="ex"){ ?>
						<font style="font-weight: bold; color: green"> Bisa Donor</font>
					</th>
				</tr>
				<?php }else{ ?>
					<font style="font-weight: bold; color: red"> Belum bisa donor lagi</font>
				</th>
			</tr>
			<tr>
				<th>Sampai</th>
				<th>: <b>
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
			 	?></b> Hari lagi
				</th>
			</tr>
			<tr>
				<th></th>
				<th>: <?= $data['tglexp']; ?></th>
			</tr>
			<?php } ?>
			<tr>
				<th>Banyak Donor</th>
				<th>: <b><?= $data['banyakdonor']; ?></b> kantong darah</th>
			</tr>
			
			<tr>
				<th>Penghargaan</th>
				<th>
					<?php 
				$hbd=$data['banyakdonor'];

				if($hbd>=10 && $hbd<25){
					?><b>Selamat anda mendapatkan reward <u>pertama</u> <font style="color: green">permenkaret</font></b><?php ;
				}elseif($hbd>=25 && $hbd<50){
					?>
					<b>Selamat anda mendapatkan reward <u>pertama</u> <font style="color: green">permenkaret</font></b><br>
					<b>Selamat anda mendapatkan reward <u>kedua</u> <font style="color: green">es korneto</font></b><?php ;
				}elseif($hbd>=50 && $hbd<75){
					?>
					<b>Selamat anda mendapatkan reward <u>pertama</u> <font style="color: green">permenkaret</font></b><br>
					<b>Selamat anda mendapatkan reward <u>kedua</u> <font style="color: green">es korneto</font></b><br>
					<b>Selamat anda mendapatkan reward <u>ketiga</u> <font style="color: green">mie ayam mamiti</font></b><?php ;
				}elseif($hbd>=75 && $hbd<100){
					?>
					<b>Selamat anda mendapatkan reward <u>pertama</u> <font style="color: green">permenkaret</font></b><br>
					<b>Selamat anda mendapatkan reward <u>kedua</u> <font style="color: green">es korneto</font></b><br>
					<b>Selamat anda mendapatkan reward <u>ketiga</u> <font style="color: green">mie ayam mamiti</font></b><br>
					<b>Selamat anda mendapatkan reward <u>keempat</u> <font style="color: green">kencan bersama mama rini</font></b><?php ;
				}elseif($hbd>=100){
					?>
					<b>Selamat anda mendapatkan reward <u>pertama</u> <font style="color: green">permenkaret</font></b><br>
					<b>Selamat anda mendapatkan reward <u>kedua</u> <font style="color: green">es korneto</font></b><br>
					<b>Selamat anda mendapatkan reward <u>ketiga</u> <font style="color: green">mie ayam mamiti</font></b><br>
					<b>Selamat anda mendapatkan reward <u>keempat</u> <font style="color: green">kencan bersama mama rini</font></b><br>
					<b>Selamat anda mendapatkan reward <u>kelima</u> <font style="color: green">paketan kartu 3 11Gb</font></b><?php ;
				}else{
					;
				}
			 ?>
				</th>
			</tr>
	</table>