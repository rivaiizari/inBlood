<?php
	if(!defined("INDEX")) die("---");

	mysqli_query($koneksi, "delete from user where id_user='$_GET[id_user]'") or die(mysqli_error($koneksi));
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=admin'>";
?>