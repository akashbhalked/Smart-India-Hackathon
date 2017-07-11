<?php
require_once('config.php');
  $empid = $_GET['id'];
  echo $empid;
  $verify=1;
  $query = $connection->prepare (" UPDATE remp_registration SET verify=? WHERE empid=?");
  $query->bind_param('ss',$verify,$empid);
  $query->execute();
  $query->store_result();

  $numRows = $query->affected_rows;
          if($numRows>0)
          {
              header('Location: ieaemployee.php');
          }
          else
              setcookie ( "msg", "Invalid Crediantials.", time()+60 );
       $query->close();
 ?>
