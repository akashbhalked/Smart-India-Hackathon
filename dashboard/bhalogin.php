<?php
session_start();
require_once('config.php');
    if(isset($_POST['email'])&& isset($_POST['pass']))
    {
    $email=htmlspecialchars($_POST['email']);
    echo $email;
    $password=$_POST['pass'];
    $password = md5($password);
    $query = $connection->prepare("SELECT uid , empname FROM badmin WHERE emailid=? and password=?");
    $query->bind_param('ss',$email, $password);
    $query->execute();
      $query->store_result();
          //$numRows = $stmt->affected_rows;
             if($query->num_rows)
              {
                  $query->bind_result($uid,$empname);
                  $query->fetch();
                  $_SESSION['Bauid'] = $uid;
                  $_SESSION['Bausername']=$empname;
                  echo $uid;
                setcookie ( "msg", "Welcome", time()+60 );
                  header("Location: bhaemployee.php");
                  exit(1);
  }
    else
        {
          setcookie ( "msg", "Your Username or Password is Incorrect", time()+60 );
            header("Location: bhadmin_login.php");
            $query->close();
    }


}
else
     header("Location: bhadmin_login.php");


?>
