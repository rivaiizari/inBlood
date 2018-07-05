<?php
	if(!defined("INDEX")) die("---");

	// $data=mysqli_fetch_array(mysqli_query($koneksi, "select * from artikel where idrs='$_GET[idrs]'"));
	
	mysqli_query($koneksi, "delete from akun where nip='$_GET[nip]'") or die(mysqli_error($koneksi));
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=operator'>";
?>