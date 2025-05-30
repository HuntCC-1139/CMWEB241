<?php
session_start();  
 
REQUIRE("../../../../galleryDBaccess.php"); 
 
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM users WHERE username = :username AND password = :password";  
                $statement = $myPDO->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  //this is the section for successful login attempts;
                
                     $_SESSION["username"] = $_POST["username"];  
                      $logfile=fopen('authorized.txt', 'a');  
                      fwrite($logfile, "{$_SERVER['REMOTE_ADDR']} ");
                      fwrite($logfile, date("F j, Y, g:i a"));
                      fwrite($logfile, "\n");
                     echo("<script>location.href='admin.php'</script>"); 
                }  
                else  
                {  //this is for unsuccessful login attempts;
                $logfile=fopen('unauthorized.txt', 'a');  
                      fwrite($logfile, "{$_SERVER['REMOTE_ADDR']} ");
                      fwrite($logfile, date("F j, Y, g:i a"));
                      fwrite($logfile, "\n");
                     $message = '<label>Incorrect username or password</label>';  
                }  
           }  
      }  

 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Photo Gallery Login</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
      
  
           <br />  
           <div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h3 align="">Photo Gallery Admin Login</h3><br />  
                <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
           </div>  
           <br />  
      </body>  
 </html> 