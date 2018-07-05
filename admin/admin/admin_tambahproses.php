<?php
	if(!defined("INDEX")) die("---");

		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$nama 	= $_POST['nama'];
		$status ='admin';


		$input = mysqli_query($koneksi, "INSERT INTO user (username, password, nama, status) values ('$username','$password','$nama','$status')
			") or die(mysqli_error($koneksi));
	
	if($input){
		echo"Data telah tersimpan";
		echo"<meta http-equiv='refresh' content='1; url=?tampil=admin'>";
	}
?>