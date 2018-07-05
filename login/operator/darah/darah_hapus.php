<?php
	if(!defined("INDEX")) die("---");

	$data=mysqli_fetch_array(mysqli_query($koneksi, "select * from darah where iddarah='$_GET[iddarah]'"));

	mysqli_query($koneksi, "delete from darah where iddarah='$_GET[iddarah]'") or die(mysqli_error($koneksi));
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=darah'>";
?>