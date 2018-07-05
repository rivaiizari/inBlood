<?php
if(!defined("INDEX")) die("---");

$email = mail($_POST['email'],$_POST['subjek'],$_POST['pesan'],"From: rivaiizari@gmail.com");

if($email){
	echo"Email telah dikirim";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=pesan'>";
}
?>