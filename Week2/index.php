<!DOCTYPE html>
<html>
  <head>
    <title>Photo Gallery</title>
    <link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
 <!-- begin header.php -->
  <div id="header">
      <h1> The Most popular Video game characters</h1>
    </div>   
<!-- end header.php --> 
    <div id="main">
	
	
<br>
		<?php
		$directory="images/";
		$photos=array(
		 array("lara.png", "Lara Croft from (Tombraider)", "Tombraider"),
		 array("mario.png", "Mario from (Super Mario Bros)", "Super Mario Bros"),
		 array("hitman.png", "Agent 47 from (Hitman)", "Hitman"),
		 array("sonic.png", "Sonic from (Sonic the Hedgehog)", "Sonic the Hedgehog"),
		 array("sackboy.png", "Sackboy from (LittleBigPlanet)", "Little Big Planet"),
		 array("pacman.png", "Pac-Man from (Pac-Man)", "Pac-Man"),
		 array("link.png", "Link from (Legend of Zelda)", "Legend of Zelda"),
		 array("masterchief.png", "Master-Chief from (Halo)", "Halo"),
		 array("shadowheart.png", "Shadowheart from (Baulder's Gate 3)", "Baulder's Gate 3"),
		
		);
		

		for ($row=0; $row< count($photos); $row++) {
			
			echo  '<div class="photos">';
			echo '<a href="photos.php?id='.$directory.$photos[$row][0].'&alt='
				.$photos[$row][1].'&caption='.$photos[$row][2].'" > <img src="'.$directory.$photos[$row][0].'"
				alt="'.$photos[$row][1].'" /></a></div>';
		
		}
		
		
		?>
<br />
	
        
<br />
   

<br />

</div>

	<h2> <a href="../index.html"> CMWEB241 Homepage </a></h2>

 <h2> <a href="../../index.html">Student Homepage </a></h2>

<!-- begin footer.php -->
    <div id="footer"><br />Copyright Carson Hunt Aug 2024</div><!-- end footer.php -->
  </body>
</html>