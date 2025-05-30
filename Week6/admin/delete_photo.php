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
    <title>Photo Gallery-Delete Photos</title>
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

<h1>Delete Photos</h1>

        <?php
        Require("../../../../galleryDBaccess.php");
        
    $id=$_GET['id'];
    $filename=$_GET['filename'];
    
    try{
        $result=$myPDO->query("DELETE FROM photographs where id='$id'");
        //if there is not a result, print an error
        
        
            //Give success message
    
    echo "<p>Record deleted successfully</p>";
    
    
            //if there is not a result, print an error
        
    }catch(PDOException $e) {
        echo "Connection failed: ". $e->getMessage();
    }
    
    //close the database;
    $myPDO=null;
    $result=null;
    
    //delete file from the images folder;
    echo $filename;
    
    unlink($filename);
    echo'<p>Filename '.$filename.' deleted successfully (꒪⌓꒪)</p>';
    
    ?>
    </div>
    
 <?php
    
    include "../layouts/footer_admin.php";
    
  ?>
   
    </body>

    
    