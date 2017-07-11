<?php
session_start();
require_once('config.php');
    if(isset($_POST['email'])&& isset($_POST['pass']))
    {
    $email=htmlspecialchars($_POST['email']);
    echo $email;
    $password=$_POST['pass'];
    $password=md5($password);
    $query = $connection->prepare("SELECT uid ,empname FROM radmin WHERE emailid=? and password=?");
    $query->bind_param('ss',$email, $password);
    $query->execute();
      $query->store_result();
          //$numRows = $stmt->affected_rows;
             if($query->num_rows)
              {
                  $query->bind_result($uid,$empname);
                  $query->fetch();
                  $_SESSION['Rauid'] = $uid;
                  $_SESSION['Rausername']= $empname;
                setcookie ( "msg", "Welcome", time()+60 );
                  header("Location: ieaemployee.php");
                  exit(1);
  }
    else
        {
          setcookie ( "msg", "Your Username or Password is Incorrect", time()+60 );
            $query->close();
    }

        header("Location: ieaadmin_login.php");
}


?>
