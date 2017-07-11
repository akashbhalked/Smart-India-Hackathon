<?php
include_once('config.php');
if(isset($_POST['sub'])){
  $password = $_POST['password'];
  $password=md5($password);
  $mob = $_POST['mob'];
  //echo $mob;
  //echo $password;
              $query1 = $connection->prepare("UPDATE bemp_registration SET  password = ? WHERE mob=?");
              $query1->bind_param('ss',$password , $mob );
              $query1->execute();
              $query1->store_result();
              $numRows = $query1->affected_rows;
              if($numRows>0)
              {
                setcookie ( "msg", "Update Successful! Kindly Login.", time()+60 );
                header("Location: Blogin.php");
              }
        else
            {
              setcookie ( "msg", "Error! Try after sometime.", time()+60 );
              header("Location: Blogin.php");
            }
       $query1->close();
}



?>
