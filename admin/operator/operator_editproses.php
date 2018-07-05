<?php
	if(!defined("INDEX")) die("---");

	if($_POST['password'] == ""){
	    $edit = mysqli_query($koneksi, "UPDATE rs SET 
			username	= '$_POST[username]',
			nama		= '$_POST[nama]',
			alamat		= '$_POST[alamat]',
			alamatmap	= '$_POST[alamatmap]',
			telp 		= '$_POST[telp]',
			email 		= '$_POST[email]',
			idprof 		= '$_POST[idprof]'

			
		WHERE idrs ='$_POST[idprof]'") or die(mysqli_error($koneksi));
		if($edit) echo"Profil berhasil di edit";
	}else{
		if($_POST['password'] != $_POST['password_ulang']){
			echo"<p style='color:red'>Password dan ulang password tidak sama</p>";
		}else{
			$password = md5($_POST['password']);
			$edit = mysqli_query($koneksi, "UPDATE rs SET 
					username	= '$_POST[username]',
					password	= '$password',
					nama		= '$_POST[nama]',
					alamat		= '$_POST[alamat]',
					alamatmap	= '$_POST[alamatmap]',
					telp 		= '$_POST[telp]',
					email 		= '$_POST[email]',
					idprof 		= '$_POST[idprof]'
					WHERE idrs='$_POST[idrs]'") or die(mysqli_error($koneksi));
			if($edit) echo"Profil berhasil di edit";
		}
	}
	
	
	if($edit){
		echo"Data telah diedit";
		echo"<meta http-equiv='refresh' content='1; url=?tampil=operator'>";
	}
?>