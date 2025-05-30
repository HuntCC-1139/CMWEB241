<!DOCTYPE html>
<html>
  <head>
    <title>Photo Gallery</title>
    <link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
 <!-- begin header.php -->
  <div id="header">
      <h1>Photo Gallery</h1>
    </div>   
<!-- end header.php --> 
    <div id="main">
	
	
<br>
		<?php
		$directory="images/";
		$photos=array(
		 array("lara.jpg", "Lara Croft from (Tombraider)"),
		 array("mario.jpg", "Mario from (Super Mario Bros)"),
		 array("hitman.jpg", "Agent 47 from (Hitman)"),
		 array("sonic.jpg", "Sonic from (Sonic the Hedgehog)"),
		 array("sackboy.jpg", "Sackboy from (LittleBigPlanet)"),
		 array("pacman.jpg", "Pac-Man from (Pac-Man)"),
		 array("link.jpg", "Link from (Legend of Zelda)"),
		 array("masterchief.jpg", "Master-Chief from (Halo)"),
		 array("shadowheart.jpg", "Shadowheart from (Baulder's Gate 3)"),
		
		);
		
		
		
		for ($row=0; $row< count($photos); $row++) {
			
			echo  '<div class="photos">'
			echo '<a href="photos.php?id='.$directory.$photos[$row][0].'&alt='
				.$photos[$row][1].'" "> <img src="'.$directory.$photos[row][0].'"
				alt"'.$photos[$row][1].'" /></a></div>';
		
		}
		
		
		?>
<br />
	
        
<br />
   

<br />

</div>
<!-- begin footer.php -->
    <div id="footer"><br />Copyright Shari Tripp Aug 2024</div><!-- end footer.php -->
  </body>
</html>