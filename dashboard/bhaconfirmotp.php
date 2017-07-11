<?php
include_once('config.php');
include 'ibasessionchecker.php';
$mob = $_POST['mob'];
$empid =$_SESSION['Bauid'];
  echo $empid;
  $otp = $_POST['otp'];
  echo $otp;
  $query = $connection->prepare("SELECT OTP  FROM badmin WHERE uid=? and otp=?");
  $query->bind_param('ss',$empid,$otp);
      $query->execute();
      $query->store_result();
      $numRows = $query->affected_rows;
          if($numRows>0)
              {
                echo "ok";
                $query1 = $connection->prepare("UPDATE badmin SET  mob = ? WHERE uid=?");
                $query1->bind_param('ss',$mob , $empid);
                $query1->execute();
                $query1->store_result();
                $numRows1 = $query1->affected_rows;
                if($numRows>0)
                {
                  header("Location: bhaemployee.php");
                }
              }
        else
            {
              setcookie ("msg","OTP missmatched.", time()+60 );
              header("Location: bharailotp.php?mob=$mob");
            }
       $query->close();

?>
