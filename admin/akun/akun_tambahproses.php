<?php
	if(!defined("INDEX")) die("---");

		$nip		= $_POST['nip'];
		$nama 		= $_POST['nama'];
		$telp		= $_POST['telp'];
		$email		= $_POST['email'];
		$alamat 	= $_POST['alamat'];
		$agama 		= $_POST['agama'];
		$tempatlahir= $_POST['tempatlahir'];
		$tgllahir 	= $_POST['tgllahir'];
		$jenisk 	= $_POST['jenisk'];
		$idjdarah 	= $_POST['idjdarah'];
		$username 	= $_POST['username'];
		$password 	= md5($_POST['password']);
		$status 	='akun';


		$input = mysqli_query($koneksi, "INSERT INTO akun (username, password, nip, nama, telp, email, alamat, agama,  tempatlahir, tgllahir, jenisk, idjdarah, status) values ('$username','$password', '$nip','$nama', '$telp','$email','$alamat','$agama','$tempatlahir', '$tgllahir', '$jenisk', '$idjdarah', '$status')") or die(mysqli_error($koneksi));
	
	if($input){
		echo"Data telah tersimpan";
		echo"<meta http-equiv='refresh' content='1; url=?tampil=akun'>";
	}
?>