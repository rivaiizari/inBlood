<?php 
	if(!defined("INDEX")) die("---");

	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];
	
	$tanggal	= date('Ymd');	
	
	if($lokasi_gambar==""){
		$edit = mysqli_query($koneksi, "UPDATE slide SET status='$_POST[status]' WHERE idslide='$_POST[id]'") or die(mysqli_error($koneksi));
	}else{
		$data=mysqli_fetch_array(mysqli_query($koneksi, "select * from slide where idslide='$_POST[id]'"));
		if($data['gambar'] != "") unlink("../gambar/slide/$data[gambar]");
		
		$edit = move_uploaded_file($lokasi_gambar,"../gambar/slide/$nama_gambar");
		mysqli_query($koneksi, "UPDATE slide SET status='$_POST[status]', gambar='$nama_gambar' WHERE idslide='$_POST[id]'") or die(mysqli_error($koneksi));
	}
	
	if($edit){
		echo"Data telah diedit";
		echo"<meta http-equiv='refresh' content='1; url=?tampil=slide'>";
	}
?>