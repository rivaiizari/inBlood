<?php
	session_start();
	
	include("lib/koneksi.php");
	include("lib/fungsi_tglindonesia.php");
	define("INDEX",true);
?> 
<!DOCTYPE html>
<html>
	<head>
		<title>In Blood</title>
		
		<!-- bootstrap -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		
		<!-- funcy box -->
		<link rel="stylesheet" href="plugin/fancybox/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
		<!-- favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="gambar/favicon.png">

		<link rel="stylesheet" href="css/style.css">
		
		<!-- cssnya slider begin -->
		<link rel="stylesheet" type="text/css" href="css/Slider/themes/default/default.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/Slider/nivo-slider.css" media="screen" />
		<!-- cssnya slider end -->

		<script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
		<script type="text/javascript" src="plugin/fancybox/jquery.fancybox.pack.js?v=2.1.0"></script>
	</head>
	<body>
	<script type="text/javascript">
		$(document).ready(function() {
		<!-- langkah 2) inisilasisasi fancybox Simple image gallery. Uses default settings -->
		$('.fancybox').fancybox();
      });
	</script>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	
	<!-- #baru -->
		<div class="row">&nbsp;</div>
		<div class="row">&nbsp;</div>

			
		<nav id="menu"> 	
			<div class="container">
				<div class="row">
					<div class="col-md-12"><?php include("menu.php"); ?> </div>
				</div>
			</div>
		</nav>			
		
		<content id="content">
		<!-- <div class="row"><div class="col-md-12"> -->
			<div class="row">
				<?php include("konten1.php"); ?>
				<!-- garis pemisah -->
				<div>&nbsp;</div>

				<div class="container">
					<div class="col-md-8"><?php include("konten.php"); ?> </div>
					<div class="col-md-4"> <?php include("sidebar.php"); ?> </div>	
				</div>
			</div>
		<!-- </div></div> -->
		</content>
		
		
		 
		<div class="footer">
			<?php include("footer.php"); ?>
		</div>
	
		<!-- slider script begin -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
		<script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 
		<script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider();
		    });
		    </script> 
		<!-- slider sript end -->
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>
