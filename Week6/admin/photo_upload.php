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
    <link href="stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
      
 <!-- begin header.php -->
 
 <?php
 include "../layouts/header_admin.php";
 
 ?>
 
<!-- end header.php --> 

    <div id="main">
	    <br />



        <?php
        
//file uploader script  

REQUIRE("../../../../galleryDBaccess.php");
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size to be under 1mb

if ($_FILES["fileToUpload"]["size"] > 1000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  
// if everything is ok, try to upload file

} else {
    $caption=$_POST['caption'];
    $filenamedb=$_FILES["fileToUpload"]["name"];
    $filesize=$_FILES["fileToUpload"]["size"];
try{
    $result=$myPDO->query("INSERT INTO photographs (filename, type, size, caption)
    Values ('$filenamedb', '$imageFileType' , '$filesize' ,
    '$caption')");

//If we have no result print an error
}   catch(PDOException $e) {
    echo    "Connection failed please try again: ". $e->getMessage();
}
echo "New records created successfully";
//Closing the database when you are done with it is good form
$myPDO=null;
$result=null;

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

   



</div>

	<h2> <a href="../index.html"> CMWEB241 Homepage </a></h2>

 <h2> <a href="../../index.html">Student Homepage </a></h2>

<!-- begin footer.php -->
<?php

    include "../layouts/footer_admin.php";
    
?>
    <!-- end footer.php -->
  </body>
</html>