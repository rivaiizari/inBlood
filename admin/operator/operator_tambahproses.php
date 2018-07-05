<?php
	if(!defined("INDEX")) die("---");

		$username 	= $_POST['username'];
		$password 	= md5($_POST['password']);
		$nama 		= $_POST['nama'];
		$alamat 	= $_POST['alamat'];
		$alamatmap 	= $_POST['alamatmap'];
		$telp		= $_POST['telp'];
		$email		= $_POST['email'];
		$idprof		= $_POST['idprof'];
		$status 	='operator';


		$input = mysqli_query($koneksi, "INSERT INTO rs (username, password, nama,alamat, alamatmap, telp, email, idprof, status) values ('$username','$password','$nama', '$alamat','$alamatmap','$telp','$email','$idprof','$status')") or die(mysqli_error($koneksi));
	
	if($input){
		echo"Data telah tersimpan";
		echo"<meta http-equiv='refresh' content='1; url=?tampil=operator'>";
	}
?>