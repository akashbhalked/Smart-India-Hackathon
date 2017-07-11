<?php
include 'ibsessionchecker.php';
require_once('config.php');

  $user = $_SESSION['Buid'];
  echo $user;
    $pass1=htmlspecialchars($_POST['pass']);
    $pass2=htmlspecialchars($_POST['passs']);
    $password=md5($pass1);
    $npassword=md5($pass2);
    if($password==$npassword)
    {
      $query = $connection->prepare("UPDATE bemp_registration SET password=? WHERE uid=? ");
      $query->bind_param('ss',$password,$user);
	     $query->execute();
       $query->store_result();


            if($query->affected_rows)
            {
                header('Location: bhtranscation.php');
            }
            else
                echo "Password Updation Failed Try After Sometime!!";
         $query->close();
    }
    else
        {
          echo "nhi hua";
        }
?>
