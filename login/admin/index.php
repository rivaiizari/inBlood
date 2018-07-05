<?php 
	include("../../lib/koneksi.php");

	if(!empty($_SESSION['status'])=='admin'){
	header('location: index.php?error='.base64_encode('you not login as user or operator but as admin!!!'));
}else{
	echo"Dilarang membuka halaman ini!";
 	echo"<meta http-equiv='refresh' content='1; url=../../index.php'>";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login in blood</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
		
		<link rel="stylesheet" href="../../css/login.css">
	</head>
	<body>

		 <div class="container">	
          
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>
    
			<form method="POST" action="ceklogin.php">		
				<h3 style="text-align: center;">Login to In Blood</h3>
				<h3 style="text-align: center;">you not login as user or operator but as admin!!!</h3>               
			</form>
           
		</div>
	</body>
</html>