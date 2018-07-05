<?php
	if(!defined("INDEX")) die("---");
	
	$tampil = mysqli_query($koneksi, "SELECT * from akun where nip='$_SESSION[nip]'") or die(mysql_error());
	$data  	= mysqli_fetch_array($tampil);
?>
<h2 class="sub-header">Edit Akun Operator</h2>

<form name="edit" method="post" action="?tampil=akun_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="nip" value="<?= $data['nip']; ?>">
	
		<div class="form-group">
			<label class="label-control col-md-2">Nip/STNK/Pasport</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="nip" maxlength="16" minlength="2" size="50" value="<?= $data['nip']; ?>"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Nama</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="nama" value="<?= $data['nama']; ?>" size="50"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">username</label>			
			<div class="col-md-8"><input type="text" class="form-control"  name="username" value="<?= $data['username']; ?>" size="50"></div>
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">password</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="password"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2">Ulang Password</label>		
			<div class="col-md-4"> <input type="password" name="password_ulang" class="form-control"></div> 
		</div>


		<div class="form-group">
			<label class="label-control col-md-2">Telepon</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="telp" value="<?= $data['telp']; ?>" size="50"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Email</label>	
			<div class="col-md-4"> <input type="email" class="form-control"  name="email" value="<?= $data['email']; ?>" size="50"></div>
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">alamat</label>			
			<div class="col-md-9"><textarea name="alamat" cols="80" rows="5" class="form-control"><?= $data['alamat']; ?></textarea></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Agama</label>	
			<div class="col-md-4">
				<select class="form-control input-sm" name="agama">
					<option value="Islam"  selected>Islam</option>
					<option value="Hindu"  selected>Hindu</option>
					<option value="Budha"  selected>Budha</option>
					<option value="kristen"  selected>kristen</option>
					<option value="Katolik"  selected>Katolik</option>
					<option value="Konghichu"  selected>Konghichu</option>
					<option value="<?= $data['agama']; ?>" selected><?= $data['agama']; ?></option>
				</select> 
			</div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">tempat lahir</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="tempatlahir" value="<?= $data['tempatlahir']; ?>" size="50"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Tanggal lahir</label>	
			<div class="col-md-4"> <input type="date" class="form-control"  name="tgllahir" value="<?= $data['tgllahir']; ?>" size="50"></div>
		</div>


		<div class="form-group">
			<label class="label-control col-md-2">Banyak Donor</label>	
			<div class="col-md-4"> 
			<a><?= $data['banyakdonor']; ?> kantong darah</a><br>
			</div>
			<div class="col-md-10">
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
			 </div>
		</div>


		<div class="form-group">
			<label class="label-control col-md-2">Jenis Kelamni</label>	
			<div class="col-md-4">
				<select class="form-control input-sm" name="jenisk">
					<option value="laki laki"  selected>Laki laki</option>
					<option value="Perempuan"  selected>Perempuan</option>
					<<option value="<?= $data['jenisk']; ?>" selected><?= $data['jenisk']; ?></option>
				</select> 
			</div>
		</div>



		<div class="form-group"> 
			<label class="label-control col-md-2">gol darah</label>	
			<div class="col-md-4"> 
				<select class="form-control input-sm" name="idjdarah">
					<option value="<?= $data['idjdarah']; ?>" selected>
						<?php 
							$tampildarah = mysqli_query($koneksi, "SELECT * from jdarah where idjdarah='$data[idjdarah]'") or die(mysql_error());
							$isi  	= mysqli_fetch_array($tampildarah);

							echo $isi['nama'];
						 ?>
					</option>	
					<!-- drop down darah -->
					<?php 
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT idjdarah as iddarah, nama FROM jdarah order by nama asc") or die(mysqli_error($koneksi));
						while($data = mysqli_fetch_array($tampil)){
					?>
					<option value="<?= $data['iddarah']; ?>" ><?= $data['nama']; ?></option>
					<?php 
						$no++;
						} 
					?>
							
				</select> 
			</div> 
		</div>

		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Save" class="btn btn-primary"></div> 
		</div>
	
</form>