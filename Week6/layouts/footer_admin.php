 <?php
 
 $day=date('M j, Y');
 $month=date("M Y");
 $year=date(" Y ");
 
 define("COPY_FORMAT", "DAY");
 
 switch (COPY_FORMAT)
 {
     
  case"YEAR";
  echo('<div id="footer"><br /> Copyright Carson Hunt '.$year. ' </div>');
 break;
 
 
  case"MONTH";
     echo('<div id="footer"><br /> Copyright Carson Hunt '.$month. ' </div>');
  break;
 
  case"DAY";
     echo('<div id="footer"><br /> Copyright Carson Hunt '.$day. ' </div>');
  break;
 
  default:
     echo('<div id="footer"><br /> Copyright Carson Hunt '.$year. ' </div>');
  
 
 }
 
 ?>
 
 <br>
 <p>Admin Section-Authorized Personal Only </p>
 
 
 
 
 

 
