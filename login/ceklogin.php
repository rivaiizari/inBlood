<?php
	session_start();
	
	include("../lib/koneksi.php");
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$cek 	= mysqli_query($koneksi, "select username, password, nama, status, idrs from rs where username='$username' and password='$password'");
	$data	= mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
	
	if($jumlah>0){
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['nama']     = stripslashes ($data['nama']);
		$_SESSION['status']     = $data['status'];
		$_SESSION['idrs']     = $data['idrs'];
		
		echo"Login berhasil!";
		 header('location:'.$_SESSION['status']);
		echo"<meta http-equiv='refresh' content='1'>";
	}else{
		// echo"<center>Gagal, username atau password salah! <br><b><a href='index.php'>ULANGI</a></b></center>";

		// perkiraanke2
		$cek 	= mysqli_query($koneksi, "select username, password, nama, status, nip from akun where username='$username' and password='$password'");
	$data	= mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
	
	if($jumlah>0){
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['nama']     = stripslashes ($data['nama']);
		$_SESSION['status']     = $data['status'];
		$_SESSION['nip']     = $data['nip'];
		
		echo"Login berhasil!";
		 header('location:'.$_SESSION['status']);
		echo"<meta http-equiv='refresh' content='1'>";
	}else{
		
	}
	echo"<center>Gagal, username atau password salah! <br><b><a href='../index.php'>ULANGI</a></b></center>";
	}
?>