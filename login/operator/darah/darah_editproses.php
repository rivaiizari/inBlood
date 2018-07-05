
<?php
	if(!defined("INDEX")) die("---");

		 $edit = mysqli_query($koneksi, "UPDATE darah SET 	
		 	nip 		='$_POST[nip]',
		 	tglmasuk 	='$_POST[tanggal]',
		 	status		='$_POST[status]'
						
		WHERE iddarah ='$_POST[iddarah]'") or die(mysqli_error($koneksi));

		if($edit){
		echo"Data telah diedit";
		echo"<meta http-equiv='refresh' content='1; url=?tampil=darah'>";
	}
?>