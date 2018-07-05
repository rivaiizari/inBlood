<?php
	if(!defined("INDEX")) die("---");
		
		$idrs=$_SESSION['idrs'];
		$nip = $_POST['nip'];

		$cek 	= mysqli_query($koneksi, "select nip from akun where nip='$nip'");
		$data	= mysqli_fetch_array($cek);
		$jumlah = mysqli_num_rows($cek);
		
		if($jumlah>0){
			
						
			mysqli_query($koneksi, "update akun set banyakdonor=banyakdonor+1 where nip='$_POST[nip]'");
			$input = mysqli_query($koneksi, "INSERT INTO darah (nip,idrs,tglmasuk,tglexp,status,statusex) value ('$nip','$idrs','$_POST[tanggal]','$_POST[tanggal]'+ INTERVAL '42' DAY,'free','bl')")or die(mysqli_error($koneksi));
				

				echo "Data telah tersimpan";
				echo "<meta http-equiv='refresh' content='1; url=?tampil=darah'>";
		}else{
			echo"<meta http-equiv='refresh' content='1; url=?tampil=darah_tambah'>";
			echo "<br><br><br>nip yang anda masukkan tidak ada<br>";
			echo "tolong di cek kembali";
			

		}
?>