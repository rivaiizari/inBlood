<?php
	session_start();
	
	include("../lib/koneksi.php");
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$cek 	= mysqli_query($koneksi, "select id_user, username, password, nama, status from user where username='$username' and password='$password'");
	$data	= mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
	
	if($jumlah>0){
		$_SESSION['id_user'] 	= $data['id_user'];
		$_SESSION['username']	= $data['username'];
		$_SESSION['password'] 	= $data['password'];
		$_SESSION['status'] 	= $data['status'];
		$_SESSION['nama']       = stripslashes ($data['nama']);
		
		echo"Login berhasil!";
		echo"<meta http-equiv='refresh' content='1; url=admin.php'>";
	}else{
		echo"<center>Gagal, username atau password salah! <br><b><a href='index.php'>ULANGI</a></b></center>";
	}
?>