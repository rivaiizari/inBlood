<?php
	if(!defined("INDEX")) die("---");

	$sql = mysqli_query($koneksi, "SELECT * FROM user where id_user='$_GET[id_user]'") or die(mysqli_error($koneksi));
	$data  	= mysqli_fetch_array($sql);
?>
<script type="text/javascript" language="JavaScript">
		function konfirmasisave(){
 			tanya = confirm("Anda Yakin Akan menyimpan Data ini?");
 			if (tanya == true) return true;
 			else return false;
 		}</script>
<h2 class="sub-header">Edit admin</h2>

<form name="edit" method="post" action="?tampil=admin_editproses" class="form-horizontal">
	<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">Username</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2">Ganti Password</label>			
			<div class="col-md-4"> <input type="password" name="password" class="form-control"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2">Ulang Password</label>		
			<div class="col-md-4"> <input type="password" name="password_ulang" class="form-control"></div> 
		</div>

		<div class="form-group"> 
			<label class="label-control col-md-2">nama</label>		
			<div class="col-md-4"> <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input onclick="return konfirmasisave()" stype="submit" name="edit" value="save"></div> 
		</div>
	
</form>