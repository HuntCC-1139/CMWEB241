
<!DOCTYPE html>
<html>
  <head>
    <title>Photo</title>
    <link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
 <!-- begin header.php -->
     <div id="header">
      <h1>Photo Gallery</h1>
    </div>   
<!-- end header.php --> 
    <div id="main">
<br />
<br />

<?php

$imgfile=$_GET["id"];
$alt=$_GET["alt"];


echo '<img src="'.$imgfile.'" alt= "'.$alt.'"><br />';

?>

<br />
<br />
<br />
<a href="index.php">Return to Gallery</a><br />
<br />
<br />
</div>
<!-- begin footer.php -->
  
    <div id="footer"><br />Copyright Shari Tripp Sep 2024</div><!-- end footer.php -->
  </body>
</html>