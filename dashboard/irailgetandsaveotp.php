<<?php
include_once('config.php');
session_start();
  $user = $_SESSION['Ruid'];
  $mobileno = $_POST['mob'];
  //$user = $_SESSION['userid'];
  $query = $connection->prepare("SELECT empid  FROM remp_registration WHERE uid=?  ");  //yaha userid se check krna hai....
  $query->bind_param('s',$user );
      $query->execute();
      $query->store_result();
      $numRows = $query->affected_rows;
          if($numRows>0)
              {
                $rand=rand(1000,9999);
              $query1 = $connection->prepare("UPDATE remp_registration SET  OTP = ? WHERE uid=?");
              $query1->bind_param('ss',$rand , $user);
              $query1->execute();
              $query1->store_result();
              $numRows1 = $query1->affected_rows;
              if($numRows>0)
              {
                header("Location: irailotp.php?mob=$mobileno");
              }
            }/*if($numRows>0)

            else
                setcookie ( "msg", "Update Error. Try after sometime.", time()+60 );*/
          /*$query->close();*/
        else
            {
              setcookie ( "msg", "Invalid Crediantials.", time()+60 );
              /*header("Location: Blogin.php");*/
            }
       $query->close();




?>
