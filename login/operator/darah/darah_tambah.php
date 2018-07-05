<?php
	if(!defined("INDEX")) die("---");
	include("../../lib/koneksi.php");

?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Tambah Darah</h2>

<form name="tambah" method="post" action="?tampil=darah_tambahproses" enctype="multipart/form-data" class="form-horizontal">	
		
		<div class="form-group">
			<label class="label-control col-md-2">NIP Pendonor</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="nip" maxlength="16" minlength="16" required></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Tgl masuk</label>			
			<div class="col-md-8"><input type="date" class="form-control"  name="tanggal" required >
			</div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()"type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>
		
</form>


