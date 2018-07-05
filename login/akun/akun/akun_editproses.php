<?php
	if(!defined("INDEX")) die("---");
	$password 	= md5($_POST['password']);

	if($_POST['password'] == ""){
	    $edit = mysqli_query($koneksi, "UPDATE akun SET 
			username	= '$_POST[username]',
			nip			=' $_POST[nip]',
			nama 		= '$_POST[nama]',
			telp		= '$_POST[telp]',
			email		= '$_POST[email]',
			alamat 		= '$_POST[alamat]',
			agama 		= '$_POST[agama]',
			tempatlahir	= '$_POST[tempatlahir]',
			tgllahir 	= '$_POST[tgllahir]',
			jenisk 		= '$_POST[jenisk]',
			idjdarah 	= '$_POST[idjdarah]',
			username 	= '$_POST[username]'
				
		WHERE nip ='$_POST[nip]'") or die(mysqli_error($koneksi));
		if($edit) echo"Profil berhasil di edit";
	}else{
		if($_POST['password'] != $_POST['password_ulang']){
			echo"<p style='color:red'>Password dan ulang password tidak sama</p>";
		}else{
			$password = md5($_POST['password']);
			$edit = mysqli_query($koneksi, "UPDATE akun SET 
				username	= '$_POST[username]',
				nip			=' $_POST[nip]',
				nama 		= '$_POST[nama]',
				telp		= '$_POST[telp]',
				email		= '$_POST[email]',
				alamat 		= '$_POST[alamat]',
				agama 		= '$_POST[agama]',
				tempatlahir	= '$_POST[tempatlahir]',
				tgllahir 	= '$_POST[tgllahir]',
				jenisk 		= '$_POST[jenisk]',
				idjdarah 	= '$_POST[idjdarah]',
				username 	= '$_POST[username]'.
				password 	= '$password'
					WHERE nip='$_POST[nip]'") or die(mysqli_error($koneksi));
			if($edit) echo"Profil berhasil di edit";
		}
	}
	
	
	if($edit){
		echo"Data telah diedit";
		echo"<meta http-equiv='refresh' content='1; url=?tampil=akun'>";
	}
?>