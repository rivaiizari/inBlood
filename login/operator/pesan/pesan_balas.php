<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysqli_query($koneksi, "SELECT * FROM pesan WHERE id_pesan='$_GET[id]'") or die(mysqli_error($koneksi));
	$data  	= mysqli_fetch_array($tampil);
?>

<h2 class="sub-header">Balas Pesan</h2>

<form name="edit" method="post" action="?tampil=pesan_balasproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?= $data['id_pesan']; ?>">
		<div class="form-group">
			<label class="label-control col-md-2">Kepada</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="email" size="50" value="<?= $data['email']; ?>"></div> 
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">subjek</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="subjek" size="50" value="Re: <?= $data['subjek']; ?>"></div> 
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Pesan</label>			
			<div class="col-md-8"> <textarea name="pesan" class="form-control" rows="15">
				
				
		
		
		
---------------------------------------------------------------------------------
<?= $data['pesan']; ?>

				</textarea></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Balas" class="btn btn-primary"></div> 
		</div>
</form>