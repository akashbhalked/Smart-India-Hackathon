<?php
session_start();
require_once('config.php');
   if(isset($_POST['uname'])&& isset($_POST['password']))
    {
    $uname=htmlspecialchars($_POST['uname']);
    $password=$_POST['password'];
    $password=md5($password);
    $query = $connection->prepare("SELECT uid,empname, verify, block FROM `bemp_registration` WHERE empid=? and password=?");
    $query->bind_param('ss',$uname, $password);
	$query->execute();
    $query->store_result();
    if($query->num_rows)
    {
        $query->bind_result($uid,$empname,$verify,$block);
        $query->fetch();
        if($verify==0)
        {
            setcookie ( "msg", "Kindly Verify your Email id", time()+60 );
        }
        else if($block==1)
        {
            setcookie ( "msg", "Your Account has been Blocked contact admin", time()+60 );
        }
        else
        {
            $_SESSION['Buid'] = $uid;
            $_SESSION['Busername']=$empname;
            setcookie ( "msg", "Welcome", time()+60 );
            header("Location: bhtranscation.php");
            exit(1);
        }
    }
    else
       setcookie ( "msg", "Your Username or Password is Incorrect", time()+60 );
         $query->close();
    }
        header("Location: Blogin.php");
?>
