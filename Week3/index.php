<!DOCTYPE html>
<html>
  <head>
    <title>Photo Gallery</title>
    <link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
      
 <!-- begin header.php -->
 
 <?php
 include "layouts/header.php";
 
 ?>
 
<!-- end header.php --> 

    <div id="main">
	
	
<br>
		<?php
		$directory="images/";
		$photos=array(
		 array("lara.png", "Lara Croft from (Tombraider)"),
		 array("mario.png", "Mario from (Super Mario Bros)"),
		 array("hitman.png", "Agent 47 from (Hitman)"),
		 array("sonic.png", "Sonic from (Sonic the Hedgehog)"),
		 array("sackboy.png", "Sackboy from (LittleBigPlanet)"),
		 array("pacman.png", "Pac-Man from (Pac-Man)"),
		 array("link.png", "Link from (Legend of Zelda)"),
		 array("masterchief.png", "Master-Chief from (Halo)"),
		 array("shadowheart.png", "Shadowheart from (Baulder's Gate 3)"),
		
		);
		
		
		
		for ($row=0; $row< count($photos); $row++) {
			
			echo  '<div class="photos">';
			echo '<a href="photos.php?id='.$directory.$photos[$row][0].'&alt='
				.$photos[$row][1].'" > <img src="'.$directory.$photos[$row][0].'"
				alt"'.$photos[$row][1].'" /></a></div>';
		
		}
		
		
		?>
<br />
	
        
<br />
   

<br />

</div>



<!-- begin footer.php -->
<?php

    include "layouts/footer.php";
    
?>
    <!-- end footer.php -->
  </body>
</html>