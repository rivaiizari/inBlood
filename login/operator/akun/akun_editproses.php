<?php
	if(!defined("INDEX")) die("---");

	$password 	= md5($_POST['password']);

	$pnip=$_POST['pknip'];
	if($_POST['password'] == ""){
	    $edit = mysqli_query($koneksi, "UPDATE akun SET 
			username	= '$_POST[username]',
			nip			= '$_POST[nip]',
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
				
		WHERE nip ='$pnip'") or die(mysqli_error($koneksi));
		if($edit) echo"<br><br><br>Profil berhasil di edit";
		echo"<meta http-equiv='refresh' content='1; url=?tampil=akun'>";
	}else{
		if($_POST['password'] != $_POST['password_ulang']){
			echo"<br><br><br><p style='color:red'>Password dan ulang password tidak sama</p>";
			echo"<meta http-equiv='refresh' content='1; url=?tampil=akun'>";
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
					WHERE nip='$pnip'") or die(mysqli_error($koneksi));
			if($edit) echo"<br><br><br>Profil berhasil di edit";
			echo"<meta http-equiv='refresh' content='1; url=?tampil=akun'>";
		}
	}
?>