	<script src="plugin/coolclock/coolclock.js" type="text/javascript"></script>
	<script src="plugin/coolclock/moreskins.js" type="text/javascript"></script>
<?php
	if(!defined("INDEX")) die("---");
?>	

<!-- TAB  -->		
	<ul class="nav nav-tabs" >
		<li class="active"><a href="#konten1" data-toggle="tab">Terbaru</a></li>
		<li><a href="#konten2" data-toggle="tab">Popular</a></li>
		<li><a href="#konten3" data-toggle="tab">Komentar</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade in active" id="konten1">
			<ul>
				<?php	
					$artikel = mysqli_query($koneksi, "select * from artikel order by id_artikel desc limit 5");
					while($data = mysqli_fetch_array($artikel)){

						echo "<li>";
						if($data['gambar']==""){
							;
						}else{
						?>
						<img src="gambar/artikel/<?php echo $data['gambar']; ?>">
						<?php
						} ?>
						 <a href="?tampil=artikel_detail&id=<?php echo $data['id_artikel']; ?>"><?php echo $data['judul']; ?></a></li>;
				<?php	
					}
				?>
			</ul>
		</div>
		<div class="tab-pane fade" id="konten2">
			<ul>
				<?php	
					$artikel = mysqli_query($koneksi, "select * from artikel order by hits desc limit 5");
					while($data = mysqli_fetch_array($artikel)){
						echo "<li>";
						if($data['gambar']==""){
							;
						}else{
						?>
						<img src="gambar/artikel/<?php echo $data['gambar']; ?>">
						<?php
						} ?>
						 <a href="?tampil=artikel_detail&id=<?php echo $data['id_artikel']; ?>"><?php echo $data['judul']; ?></a></li>;
				<?php	
					}
				?>
			</ul>
		</div>
		<div class="tab-pane fade" id="konten3">
			<ul>
				<?php	
					$komentar = mysqli_query($koneksi, "select * from komentar order by id_komentar desc limit 5");
					while($data = mysqli_fetch_array($komentar)){
						echo "<li><b>$data[nama]: </b> <a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[komentar]</a></li>";
					}
				?>
			</ul>
		</div>
	</div>

<!-- ---------------------- POLLING ---------------------- -->	
	<!-- <script>(function(i,s,o,g,r,a,m){i['QP']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.poll-maker.com/3012/pollembed.js','qp');</script> -->
	
	
	
<!-- ---------------------- STATISTIK PENGUNJUNG ---------------------- -->	
	<!-- h4 class="page-header"> Kalender </h4>    
	<div data-tockify-component="mini" data-tockify-calendar="rohismart"></div>
	<script data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script> <br> -->
	
	
<!-- ---------------------- TWITTER ---------------------- -->	
<!-- 	<a class="twitter-timeline" href="https://twitter.com/RohiAbdulloh" data-widget-id="718462952349655041">Tweets by @RohiAbdulloh</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<br> -->

<!-- ---------------------- STATISTIK PENGUNJUNG ---------------------- -->	
<!-- 	<h4 class="page-header"> Jumlah Pengunjung </h4>
	<a href="http://24counter.com"><img src="http://24counter.com/count.php?c_style=4&id=1460133150" border=0 alt="web counter"></a><br><a href="http://24counter.com" style="font-size:9px;">blog counter</a><br><br>
   -->

<!-- ---------------------- SHARE BUTTON---------------------- -->
	<!-- AddToAny BEGIN -->
	<!-- <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
	<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
	<a class="a2a_button_facebook"></a><a class="a2a_button_twitter"></a><a class="a2a_button_google_plus"></a><a class="a2a_button_linkedin"></a><a class="a2a_button_pinterest"></a><a class="a2a_button_whatsapp"></a><a class="a2a_button_google_gmail"></a>
	</div>
	<script async src="https://static.addtoany.com/menu/page.js"></script>
	<br> -->
	<!-- AddToAny END -->

<!-- ---------------------- YOUTUBE ---------------------- -->	
	<!-- <iframe width="100%" height="200" src="https://www.youtube.com/embed/DEKzVcTUowE" frameborder="0" allowfullscreen></iframe>
	<br> -->

<!-- ---------------------- FACEBOOK ---------------------- -->	
	<!-- <div class="fb-comments" data-href="http://smkbinanusa.sch.id" data-numposts="15" data-width="300%"></div>
	<br> -->
	
<!-- ---------------------- GOOGLE MAP ---------------------- -->
	<!-- <h4 class="page-header">Lokasi</h4>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.18531085907!2d109.14627281424474!3d-6.98744037036884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbfa9f292bc4f%3A0x3a4af38d8f0d083f!2sJl.+Citarum%2C+Slawi+Wetan%2C+Slawi%2C+Tegal%2C+Jawa+Tengah!5e0!3m2!1sid!2sid!4v1460042714526" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe> -->
	
