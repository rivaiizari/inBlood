<?php
	if(!defined("INDEX")) die("---");
	
	$tampil = mysqli_query($koneksi, "SELECT * FROM slide WHERE idslide='$_GET[id]'") or die(mysqli_error($koneksi));
	$data  	= mysqli_fetch_array($tampil);
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Edit slide</h2>
<form name="edit" method="post" action="?tampil=slide_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" value="<?= $data['idslide']; ?>">
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Gambar</label>
			<div class="col-md-4"><img src="../gambar/slide/<?= $data['gambar']; ?>" width="300" class="thumbnail"> <input type="file" class="form-control" name="gambar"></div> 
		</div>


		<div class="form-group"> 
			<label class="label-control col-md-2">status</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="status" size="50" value="<?= $data['status']; ?>"></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()"type="submit" name="edit" value="save" class="btn btn-primary"></div>
		</div>
	
</form>