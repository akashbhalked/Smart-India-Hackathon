<?php
session_start();
require_once('config.php');

  $user = $_SESSION['Bauid'];
  echo $user;
    $pass1=htmlspecialchars($_POST['pass']);
    $pass2=htmlspecialchars($_POST['passs']);
    $password=md5($pass1);
    $npassword=md5($pass2);
    if($password==$npassword)
    {
      $query = $connection->prepare("UPDATE badmin SET password=? WHERE uid=? ");
      $query->bind_param('ss',$password,$user);
	     $query->execute();
       $query->store_result();


            if($query->affected_rows)
            {
                header('Location: bhaemployee.php');
            }
            else
                echo "Password Updation Failed Try After Sometime!!";
         $query->close();
    }
    else
        {
        setcookie ( "msg", "Invalid Crediantials.", time()+60 );
        }
?>
