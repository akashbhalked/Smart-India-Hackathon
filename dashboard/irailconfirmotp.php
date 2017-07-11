<?php
include_once('config.php');
include 'irailsessionchecker.php';
session_start();
$mob = $_SESSION['mob'];
  //$mob = $_GET['mob'];
  $otp = $_POST['otp'];
  echo $otp;
  $query = $connection->prepare("SELECT OTP  FROM remp_registration WHERE otp=?");
  $query->bind_param('s',$otp);
      $query->execute();
      $query->store_result();
      $numRows = $query->affected_rows;
          if($numRows>0)
              {
                $query1 = $connection->prepare("UPDATE remp_registration SET  mob = ? WHERE OTP=?");
                $query1->bind_param('ss',$mob , $otp);
                $query1->execute();
                $query1->store_result();
                $numRows1 = $query1->affected_rows;
                if($numRows>0)
                {
                  header("Location: irailtranscation.php");
                }
              }
        else
            {
              setcookie ( "msg", "OTP missmatched.", time()+60 );
            header("Location: Rfp_otp.php?mob=$mob");
            }
       $query->close();

?>
