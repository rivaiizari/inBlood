<?php
	if(!defined("INDEX")) die("---");

	$sql = mysqli_query($koneksi, "SELECT * FROM submenu WHERE id_submenu='$_GET[id]'") or die(mysqli_error($koneksi));
	$data  	= mysqli_fetch_array($sql);
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Edit Sub Menu</h2>

<form name="edit" method="post" action="?tampil=submenu_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?= $data['id_submenu']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">Judul Sub Menu</label>	
			<div class="col-md-3"> <input type="text" class="form-control" name="judul" value="<?= $data['judul']; ?>"></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Induk</label>	
			<label class="label-control col-md-2"><select  class="form-control" name="induk">
			<?php
				$sqlmenu = mysqli_query($koneksi, "select * from menu");
				while($datamenu = mysqli_fetch_array($sqlmenu)){
					if($datamenu['id_menu'] == $data['id_menu']) echo"<option value='$datamenu[id_menu]' selected> $datamenu[judul] </option>";
					else  echo"<option value='$datamenu[id_menu]'> $datamenu[judul] </option>";
				}
			?>
			</select  class="form-control"></label> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Link</label>			
			<div class="col-md-4"> <input type="text" class="form-control" name="link" value="<?= $data['link']; ?>"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2">Urutan</label>		
			<div class="col-md-1"> <input type="text" class="form-control" name="urutan" value="<?= $data['urutan']; ?>"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()"type="submit" name="edit" value="save" class="btn btn-primary"></div>
		</div>
	
</form>