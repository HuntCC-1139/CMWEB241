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
    <title>Photo Gallery-Photo List</title>
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

<h1>List/Delete Photos</h1>
        <?php
        Require("../../../../galleryDBaccess.php");
        
        try{
            $result=$myPDO->query("SELECT id, filename, caption from photographs");
            //if there is no result,print an error
        } catch (PDOException $e) {
            echo "No result: ". $e->getMessage();
        }
            
        //display the data pulled from the database
        echo '<div class="photos">';
        echo '<table border="1">';
        
        $directory="../images/";
        
        //the while loop will pull all rows from the table until there are no more results
        
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
            $id=$row['id'];
            $filename=$row['filename'];
            $caption=$row['caption'];
            
            echo'<tr><td><a href="delete_photo.php?id='.$id.'&filename='.$directory
            .$filename.'"><img src="'.$directory.$filename. '" alt="'.$caption.'" width="200"></a></td><td><a href="delete_photo.php?id='.$id.'&filename='
.$directory.$filename.'">Delete</a></td></tr>';
            
        }
        echo '</table>';
        echo '</div>';
        
        //close database;
        $myPDO=null;
        $result=null;
        
        ?>

</div>
        
        <p><a href="../index.php">Photo Gallery</a></p>
        <p><a href="admin.php">Admin Menu</a></p>

	<h2> <a href="../../index.html"> CMWEB241 Homepage </a></h2>

 <h2> <a href="../../../index.html">Student Homepage </a></h2>

<!-- begin footer.php -->
<?php

    include "../layouts/footer_admin.php";
    
?>
    <!-- end footer.php -->
  </body>
</html>