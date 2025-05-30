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
    <title>Photo Gallery- Delete Authorized Log File </title>
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

        <h1>Clear Unauthorized Log File</h1>
        <br>
        <a href="admin.php"> Admin Menu</a>
        <br>
        <p>Log File Cleared</p>
         <?php
         $logfile=fopen("unauthorized.txt", "w") or die("Unable to open file!");
      fwrite($logfile, "Log file cleared by ");
       fwrite($logfile, "{$_SERVER['REMOTE_ADDR']} ");
        fwrite($logfile, " on ");
         fwrite($logfile, date ("F j, Y, g:i a" ));
          fwrite($logfile, "\n");
          fclose($logfile);

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