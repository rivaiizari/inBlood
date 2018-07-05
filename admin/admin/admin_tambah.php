<?php
	if(!defined("INDEX")) die("---");
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Tambah Akun Admin</h2>

<form name="tambah" method="post" action="?tampil=admin_tambahproses" enctype="multipart/form-data" class="form-horizontal">	
		
		<div class="form-group">
			<label class="label-control col-md-2">username</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="username" size="50" required></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">password</label>	
			<div class="col-md-4"><input type="text" class="form-control"  name="password" size="50" required></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">nama</label>			
			<div class="col-md-8"><input type="text" class="form-control"  name="nama" size="50"required></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()" type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>
		
</form>