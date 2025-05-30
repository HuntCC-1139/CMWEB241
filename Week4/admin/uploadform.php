<!DOCTYPE html>
<html>
  <head>
    <title>Photo Gallery-Upload</title>
    <link href="../stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
      
 <!-- begin header.php -->
 
 <?php
 include "../layouts/header.php";
 
 ?>
 
<!-- end header.php --> 

    <div id="main">
	    <br />

        <form action="photo_upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

   



</div>

	<h2> <a href="../../index.html"> CMWEB241 Homepage </a></h2>

 <h2> <a href="../../../index.html">Student Homepage </a></h2>

<!-- begin footer.php -->
<?php

    include "../layouts/footer.php";
    
?>
    <!-- end footer.php -->
  </body>
</html>