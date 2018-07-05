<?php
	if(!defined("INDEX")) die("---");
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Tambah Akun user</h2>

<form name="tambah" method="post" action="?tampil=akun_tambahproses" enctype="multipart/form-data" class="form-horizontal">	
		
		<div class="form-group">
			<label class="label-control col-md-2">Nip/STNK/Pasport</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="nip" maxlength="16" minlength="16" size="50" required></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Nama</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="nama" size="50" required></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Telepon</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="telp" size="50"maxlength="13" minlength="7"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Email</label>	
			<div class="col-md-4"> <input type="email" class="form-control"  name="email" m size="50"></div>
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">alamat</label>			
			<div class="col-md-9"><textarea name="alamat" cols="80" rows="5" class="form-control"></textarea></div>
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
					<option value="belum pilih agama"  selected>Pilih agama</option>
				</select> 
			</div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">tempat lahir</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="tempatlahir" m size="50"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Tanggal lahir</label>	
			<div class="col-md-4"> <input type="date" class="form-control"  name="tgllahir" m size="50"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Jenis gener</label>	
			<div class="col-md-4">
				<select class="form-control input-sm" name="jenisk">
					<option value="Islam"  selected>Laki laki</option>
					<option value="Hindu"  selected>Perempuan</option>
					<option value="belum gener"  selected>Pilih gener</option>
				</select> 
			</div>
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">gol darah</label>	
			<div class="col-md-4"> 
				<select class="form-control input-sm" name="idjdarah" required>
					<option value="0"  selected>Pilih Gol darah</option>
					<?php 
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM jdarah order by nama asc") or die(mysqli_error($koneksi));
						while($data = mysqli_fetch_array($tampil)){
					?>
					<option value="<?= $data['idjdarah']; ?>"  ><?= $data['nama']; ?></option>
					<?php 
						$no++;
						} 
					?>
									
				</select> 
			</div> 
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">username</label>			
			<div class="col-md-8"><input type="text" class="form-control"  name="username" size="50"required></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">password</label>	
			<div class="col-md-4"><input type="text" class="form-control"  name="password" size="50" required></div>
		</div>
		
		
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()" type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>
		
</form>