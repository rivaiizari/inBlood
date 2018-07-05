<div id="mycarousel" class="carousel slide">
	
<?php
	if(!defined("INDEX")) die("---");	
?>

<div id="slider" class="nivoSlider" class="bgslider" >
	<?php 
        $Lihat="SELECT * FROM slide ORDER BY idslide desc limit 7";
        						$tampil = mysqli_query($koneksi, $Lihat) or die(mysqli_error($koneksi));
       							$nomer=0;

        						while ($data=mysqli_fetch_array($tampil)){
                 					$idslide    = stripslashes ($data['idslide']);
                 					$gambar    	= stripslashes ($data['gambar']);
                 					$status     = stripslashes ($data['status']);

         						{
        							$nomer++;	
   							?>
  							<?php
    							if($status==1){ ?>
								      <img src="gambar/slide/<?php echo $gambar; ?>" data-thumb="gambar/slide/<?php echo $gambar; ?>" alt="" />
								  <?php   }else{
                    ;
							      }
   							 	}
 							 }

 							 ?>
</div>