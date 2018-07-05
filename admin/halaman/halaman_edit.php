<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysqli_query($koneksi, "SELECT * FROM halaman WHERE id_halaman='$_GET[id]'") or die(mysqli_error($koneksi));
	$data  	= mysqli_fetch_array($tampil);
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Edit Halaman</h2>

<form name="edit" method="post" action="?tampil=halaman_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?= $data['id_halaman']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">Judul Halaman</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="judul" size="50" value="<?= $data['judul']; ?>"></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Isi Halaman</label>			
			<div class="col-md-10"><textarea name="isi" rows="15" class="form-control"><?= $data['isi']; ?></textarea></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()"type="submit" name="edit" value="save" class="btn btn-primary"></div> 
		</div>
	
</form>