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
    <title>Photo Gallery-UnAuthorized Log File </title>
    <link href="../stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
      
 <!-- begin header.php -->
 
 <?php
 include "../layouts/admin_header.php";
 
 ?>
 
<!-- end header.php --> 

    <div id="main">
	    <br />

        <h1>UnAuthorized Log File</h1>
        <br>
        <p><a href="../index.php">Photo Gallery</a></p>
        <p><a href="admin.php">Admin Menu</a></p>
        <p></p><a href="deleteUnauthorized.php">Clear unauthorized Log File</a></p>
        <br>
        
         <?php
         $logfile=fopen("unauthorized.txt", "r");
         while(! feof($logfile))
         {
             echo fgets($logfile). "<br>";
             
         }

         fclose($logfile);
         ?>

</div>

	<h2> <a href="../../index.html"> CMWEB241 Homepage </a></h2>

 <h2> <a href="../../../index.html">Student Homepage </a></h2>

<!-- begin footer.php -->
<?php

    include "../layouts/admin_footer.php";
    
?>
    <!-- end footer.php -->
  </body>
</html>