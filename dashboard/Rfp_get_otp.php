<?php
include_once('config.php');
if(isset($_POST['sub'])){
  $mob = $_GET['mob'];
  $otp = $_POST['otp'];
  $query = $connection->prepare("SELECT otp  FROM remp_registration WHERE otp=?");
  $query->bind_param('s',$otp);
      $query->execute();
      $query->store_result();
      $numRows = $query->affected_rows;
          if($numRows>0)
              {
                header("Location: Rupdatepass.php?mob=$mob");
              }
        else
            {
              setcookie ( "msg", "OTP missmatched.", time()+60 );
              header("Location: Rfp_get_otp.php?mob=$mob");
            }
       $query->close();
}
?>
