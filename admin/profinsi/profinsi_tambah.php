<?php
	if(!defined("INDEX")) die("---");
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Tambah Artikel</h2>

<form name="tambah" method="post" action="?tampil=artikel_tambahproses" enctype="multipart/form-data" class="form-horizontal">	
		
		<div class="form-group">
			<label class="label-control col-md-2">Judul Artikel</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="judul" size="50"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Gambar</label>	
			<div class="col-md-4"><input type="file" name="gambar" class="form-control"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Isi Artikel</label>			
			<div class="col-md-8"><textarea name="isi" cols="80" rows="15" class="form-control"></textarea></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()" type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>
		
</form>