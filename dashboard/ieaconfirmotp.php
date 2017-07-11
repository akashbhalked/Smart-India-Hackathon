<?php
include_once('config.php');
include 'irailasessionchecker.php';
$mob = $_POST['mob'];
$empid =$_SESSION['Rauid'];
  $otp = $_POST['otp'];
  $query = $connection->prepare("SELECT OTP  FROM radmin WHERE uid=? and otp=?");
  $query->bind_param('ss',$empid,$otp);
      $query->execute();
      $query->store_result();
      $numRows = $query->affected_rows;
          if($numRows>0)
              {
                $query1 = $connection->prepare("UPDATE radmin SET  mob = ? WHERE uid=?");
                $query1->bind_param('ss',$mob , $empid);
                $query1->execute();
                $query1->store_result();
                $numRows1 = $query1->affected_rows;
                if($numRows>0)
                {
                  header("Location: ieaemployee.php");
                }
              }
        else
            {
              setcookie ( "msg", "OTP missmatched.", time()+60 );
            header("Location: iearailotp.php?mob=$mob");
            }
       $query->close();

?>
