  <div id="header">
      <h1>  Warhammer40k Photo Gallery </h1>
      <a href="index.php">Home</a>&nbsp;&nbsp;
      
      <?php
      if(isset($_SESSION["username"]))
      {
          echo'<a href="admin/admin.php">Administration Page</a>';
      }
      else
      {
          echo '<a href="admin/index.php">Log In</a>';
          
      }
      ?>
      <br>
      <br>
    </div>  