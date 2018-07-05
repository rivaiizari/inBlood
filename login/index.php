<?php
session_start();

if ( isset($_SESSION['username']) && $_SESSION['password'] != '' ) {
    $halaman = $_SESSION['status'];

    if($_SESSION['status']=="admin"){
	header('location: admin/index.php?error='.base64_encode('you not login as user or operator but as admin!!!'));
}
    header('location:'.$_SESSION['status']);
	// header('location:ceklogin.php');
    exit();
} else {
    header('location:login.php');
    exit();
}