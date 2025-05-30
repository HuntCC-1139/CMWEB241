<?php
session_start();  
 if(isset($_SESSION["username"]))  
 {  
    echo '<br /><br /><a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:index.php");  
 }  
 ?>  
<!DOCTYPE html>
<html>
  <head>
    <title>Photo Gallery-Upload</title>
    <link href="../stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
      
      
      
 <!-- begin header.php -->
 
 <?php
 include "../layouts/header_admin.php";
 
 ?>
 
<!-- end header.php --> 

    <div id="main">
	    <br />

        <form action="photo_upload.php" method="post" enctype="multipart/form-data">
 <p><label for="filetoUpload">Select image to upload:</label> 
  <input type="file" name="fileToUpload" id="fileToUpload"></p>
  <p><label for="caption">Please enter a caption for your photo</label></p>
  <input tupe="text" name="caption" id="caption">
  <br/>
  <br/>
  <input type="submit" value="Upload Image" name="submit">
</form>

   



</div>



<!-- begin footer.php -->
<?php

    include "../layouts/footer_admin.php";
    
?>
    <!-- end footer.php -->
  </body>
</html>