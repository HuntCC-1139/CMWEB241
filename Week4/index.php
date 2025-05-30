<!DOCTYPE html>
<html>
  <head>
    <title>Photo Gallery</title>
    <link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
      
 <!-- begin header.php -->
 
 <?php
 include "layouts/header.php";
 
 ?>
 
<!-- end header.php --> 

<?php
/*
    this is the file with your database connection information. It is stored in your website's root directory (above the public_html folder) it contains the login information to the database.
*/

/*
    If saved in public_html or a sub_folder, it needs to be in the root directory because the root can only be accessed via FTP, and only if someone knows the login aka user and pass for ftp settings. Always have php extension

*/

REQUIRE("../../../galleryDBaccess.php");

?>

    <div id="main">
	
	
	    <?php
	    $directory="images/";
	    //request the rows in a database
try{
$result=$myPDO->query("SELECT filename, caption FROM photographs");

//if there is not a result, print an error
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

	  
	 //Display the data pulled from the database

echo'<div class="photos">';

    //note that the wile loop keeps pulling rows from the table until there are no more results;
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $filename=$row['filename'];
        $caption=$row['caption'];
    
            
            echo  '<a href="photos.php?id='.$directory.$filename.'&alt='.$caption.' ">
            
             <img src="'.$directory.$filename.'" alt="'.$caption.'"/></a>';
  
  }
  
  echo '</div>';


//closing the database when you are done with it

$myPDO=null;

	    ?>

<br />
	
        

</div>



<!-- begin footer.php -->
<?php

    include "layouts/footer.php";
    
?>
    <!-- end footer.php -->
  </body>
</html>