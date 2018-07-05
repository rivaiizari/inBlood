<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysqli_query($koneksi, "SELECT jdarah.idjdarah as idjdarah, jdarah.nama as namadarah, akun.nip as nip, akun.nama as namaakun, akun.telp as telpakun, akun.email as emailakun, akun.alamat as alamatakun, akun.agama as agamaakun, akun.tempatlahir as tempatlahirakun, akun.tgllahir as tgllahirakun, akun.jenisk as jeniskakun, akun.banyakdonor as banyakdonorakun, akun.username as usernameakun, akun.password as passwordakun FROM akun, jdarah where akun.idjdarah = jdarah.idjdarah && akun.nip='$_GET[nip]'") or die(mysql_error());
	$data  	= mysqli_fetch_array($tampil);
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Edit Akun Operator</h2>

<form name="edit" method="post" action="?tampil=akun_editproses" enctype="multipart/form-data" class="form-horizontal">
	<?php $pknip = $data['nip']; ?>
	<input type="hidden" name="nip" value="<?= $data['nip']; ?>">
	
		<div class="form-group">
			<label class="label-control col-md-2">Nip/STNK/Pasport</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="nip" maxlength="16" minlength="2" size="50" value="<?= $data['nip']; ?>"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Nama</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="nama" value="<?= $data['namaakun']; ?>" size="50"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">username</label>			
			<div class="col-md-8"><input type="text" class="form-control"  name="username" value="<?= $data['usernameakun']; ?>" size="50"></div>
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
			<div class="col-md-4"> <input type="text" class="form-control"  name="telp" value="<?= $data['telpakun']; ?>" size="50"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Email</label>	
			<div class="col-md-4"> <input type="email" class="form-control"  name="email" value="<?= $data['emailakun']; ?>" size="50"></div>
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">alamat</label>			
			<div class="col-md-9"><textarea name="alamat" cols="80" rows="5" class="form-control"><?= $data['alamatakun']; ?></textarea></div>
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
					<option value="<?= $data['agamaakun']; ?>" selected><?= $data['agamaakun']; ?></option>
				</select> 
			</div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">tempat lahir</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="tempatlahir" value="<?= $data['tempatlahirakun']; ?>" size="50"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Tanggal lahir</label>	
			<div class="col-md-4"> <input type="date" class="form-control"  name="tgllahir" value="<?= $data['tgllahirakun']; ?>" size="50"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Jenis Kelamni</label>	
			<div class="col-md-4">
				<select class="form-control input-sm" name="jenisk">
					<option value="laki laki"  selected>Laki laki</option>
					<option value="Perempuan"  selected>Perempuan</option>
					<<option value="<?= $data['jeniskakun']; ?>" selected><?= $data['jeniskakun']; ?></option>
				</select> 
			</div>
		</div>



		<div class="form-group"> 
			<label class="label-control col-md-2">gol darah</label>	
			<div class="col-md-4"> 
				<select class="form-control input-sm" name="idjdarah">
					<option value="<?= $data['idjdarah']; ?>"  selected><?= $data['namadarah']; ?></option>
					<?php 
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT idjdarah as iddarah, nama FROM jdarah order by nama asc") or die(mysqli_error($koneksi));
						while($data = mysqli_fetch_array($tampil)){
					?>
					<option value="<?= $data['iddarah']; ?>"  ><?= $data['nama']; ?></option>
					<?php 
						$no++;
						} 
					?>
									
				</select> 
			</div> 
		</div>

		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()" type="submit" name="edit" value="Save" class="btn btn-primary"></div> 
		</div>
	
</form>