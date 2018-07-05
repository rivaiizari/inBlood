<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysqli_query($koneksi, "SELECT profinsi.namaprof as namaprof,rs.idrs as idrs, rs.username as usernamers, rs.password as passwordrs, rs.nama as namars, rs.alamat as alamatrs, rs.alamatmap as alamatmaprs, rs.telp as telprs, rs.email as emailrs , rs.idprof as idprof FROM rs inner join profinsi on rs.idprof = profinsi.idprof && idrs='$_GET[idrs]'") or die(mysql_error());
	$data  	= mysqli_fetch_array($tampil);
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Edit Akun Operator</h2>

<form name="edit" method="post" action="?tampil=operator_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="idrs" value="<?= $data['idrs']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">nama</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="nama" size="50" value="<?= $data['namars']; ?>"></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">alamat</label>			
			<div class="col-md-9"><textarea name="alamat" cols="80" rows="5" class="form-control"><?= $data['alamatrs']; ?></textarea></div>
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">alamat google Map</label>			
			<div class="col-md-9"><textarea name="alamatmap" cols="80" rows="7" class="form-control"><?= $data['alamatmaprs']; ?></textarea></div>
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">No.Telp</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="telp" size="50" value="<?= $data['telprs']; ?>"></div> 
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">email</label>	
			<div class="col-md-4"> <input type="email" class="form-control" name="email" size="50" value="<?= $data['emailrs']; ?>"></div> 
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">username</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="username" size="50" value="<?= $data['usernamers']; ?>"></div> 
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
			<label class="label-control col-md-2">Profinsi</label>	
			<div class="col-md-4"> 
				<select class="form-control input-sm" name="idprof">
					<option value="<?= $data['idprof']; ?>"  selected><?= $data['namaprof']; ?></option>
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
			<div class="col-md-4"> <input onclick="return konfirmasisave()"type="submit" name="edit" value="Save" class="btn btn-primary"></div> 
		</div>
	
</form>