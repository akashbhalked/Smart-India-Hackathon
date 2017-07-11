<?php
include_once('config.php');
if(isset($_POST['sub'])){
  $mobileno = $_POST['mob'];

  $dob = $_POST['dob'];
  $query = $connection->prepare("SELECT mob , dob FROM bemp_registration WHERE mob=? and dob=?");
  $query->bind_param('ss',$mobileno , $dob);
      $query->execute();
      $query->store_result();
      $numRows = $query->affected_rows;
          if($numRows>0)
              {
                $rand=rand(1000,9999);
              $query1 = $connection->prepare("UPDATE bemp_registration SET  OTP = ? WHERE mob=? and dob=?");
              $query1->bind_param('sss',$rand , $mobileno , $dob);
              $query1->execute();
              $query1->store_result();
              $numRows1 = $query1->affected_rows;
              if($numRows>0)
              {
                header("Location: Bfp_otp.php?mob=$mobileno");
              }
            }/*if($numRows>0)

            else
                setcookie ( "msg", "Update Error. Try after sometime.", time()+60 );*/
          /*$query->close();*/
        else
            {
              setcookie ( "msg", "Invalid Crediantials.", time()+60 );
              header("Location: Blogin.php");
            }
       $query->close();
}



?>
