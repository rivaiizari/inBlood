<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysqli_query($koneksi, "SELECT * FROM darah WHERE iddarah='$_GET[iddarah]'") or die(mysql_error());
	$data  	= mysqli_fetch_array($tampil);
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Edit darah</h2>

<form name="edit" method="post" action="?tampil=darah_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="iddarah" value="<?= $data['iddarah']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">nip</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="nip" minlength="16" maxlength="16"size="50" value="<?= $data['nip']; ?>"></div> 
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">tanggal</label>	
			<div class="col-md-4"> 
			<input type="date" class="form-control" name="tanggal" size="50" value="<?= $data['tglmasuk']; ?>"></div> 
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">status</label>	
			<div class="col-md-4"> 
				<select name="status" class="form-control" >
					<option value="<?= $data['status']; ?>"><?= $data['status']; ?></option>
					<option value="free">free</option>
					<option value="order">order</option>
				</select>
			</div>
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()"type="submit" name="edit" value="Save" class="btn btn-primary"></div> 
		</div>
	
</form>