<?php
	if(!defined("INDEX")) die("---");
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Tambah Menu</h2>
<form name="tambah" method="post" action="?tampil=submenu_tambahproses" class="form-horizontal">
		<div class="form-group">
			<label class="label-control col-md-2">Judul Menu</label>	
			<div class="col-md-3"> <input type="text" class="form-control"  name="judul"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Induk</label>	
			<div class="col-md-2"><select name="induk" class="form-control">
			<?php
				$sqlmenu = mysqli_query($koneksi, "select * from menu");
				while($datamenu = mysqli_fetch_array($sqlmenu)){
					echo"<option value='$datamenu[id_menu]'> $datamenu[judul] </option>";
				}
			?>
			</select></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Link</label>			
			<div class="col-md-4"> <input type="text" class="form-control"  name="link"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Urutan</label>		
			<div class="col-md-1"> <input type="text" class="form-control"  name="urutan"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()"type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>	
</form>