<?php
if(!defined("INDEX")) die("---");
	
$data=mysqli_fetch_array(mysqli_query($koneksi, "select * from slide where idslide='$_GET[id]'"));
if($data['gambar'] != "") unlink("../gambar/slide/$data[gambar]");

$hapus = mysqli_query($koneksi, "delete from slide where idslide='$_GET[id]'") or die(mysqli_error($koneksi));
if($hapus){
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=slide'>";
}
?>