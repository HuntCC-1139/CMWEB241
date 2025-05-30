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
    <title>Photo Gallery-Admin Menu</title>
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

        <h1>Admin Menu</h1>
        <p><a href="uploadform.php">Photo Upload</a></p>
        <p><a href="authorized.php">Authorized Logins</a></p>
        <p><a href="unauthorized.php">Unauthorized Logins</a></p>
        <p><a href="logout.php">Log Out</a></p>

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