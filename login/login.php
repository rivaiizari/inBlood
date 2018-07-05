<!DOCTYPE html>
<html>
	<head>
		<title>Login in blood</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
		
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="../gambar/favicon.png">
		
		<link rel="stylesheet" href="../css/login.css">
	</head>
	<body>

		 <div class="container">	    
			<form method="POST" action="ceklogin.php">		
				<h3 style="text-align: center;">Login to In Blood</h3>
				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
				<input type="password" name="password" class="form-control" placeholder="Password" required style="margin-top: 5px; ">
				<br>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
               
			</form>
           
		</div>
	</body>
</html>