<?php
require_once('config.php');
  $empid = $_GET['id'];
  echo $empid;
  $verify=1;
  $query = $connection->prepare (" UPDATE bemp_registration SET verify=? WHERE empid=?");
  $query->bind_param('ss',$verify,$empid);
  $query->execute();
  $query->store_result();

  $numRows = $query->affected_rows;
          if($numRows>0)
          {
              header('Location: bhaemployee.php');
          }
          else
            setcookie ( "msg", "Unknown error,please try again", time()+60 );
       $query->close();
 ?>
