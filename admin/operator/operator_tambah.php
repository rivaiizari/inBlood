<?php
	if(!defined("INDEX")) die("---");
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Tambah Akun operator</h2>

<form name="tambah" method="post" action="?tampil=operator_tambahproses" enctype="multipart/form-data" class="form-horizontal">	
		
		<div class="form-group">
			<label class="label-control col-md-2">username</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="username" size="50"required></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">password</label>	
			<div class="col-md-4"><input type="text" class="form-control"  name="password" size="50" required></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">nama</label>			
			<div class="col-md-8"><input type="text" class="form-control"  name="nama" size="50" required></div>
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">alamat</label>			
			<div class="col-md-9"><textarea name="alamat" cols="80" rows="5" class="form-control"></textarea></div>
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">alamat google Map</label>			
			<div class="col-md-9"><textarea name="alamatmap" cols="80" rows="7" class="form-control"></textarea></div>
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">No.Telp</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="telp" size="50" value=""></div> 
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">email</label>	
			<div class="col-md-4"> <input type="email" class="form-control" name="email" size="50" value=""></div> 
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">Profinsi</label>	
			<div class="col-md-4"> 
				<select class="form-control input-sm" name="idprof" required>
					<option value="0"  selected>Pilih Profinsi</option>
					<?php 
						$no=1;
						$tampil = mysqli_query($koneksi, "SELECT * FROM Profinsi order by namaprof asc") or die(mysqli_error($koneksi));
						while($data = mysqli_fetch_array($tampil)){
					?>
					<option value="<?= $data['idprof']; ?>"  ><?= $data['namaprof']; ?></option>
					<?php 
						$no++;
						} 
					?>
									
				</select> 
			</div> 
		</div>

		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()" type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>
		
</form>