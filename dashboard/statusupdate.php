<?php
    require_once('config.php');
    session_start();
    $rrnum=$_GET['rrnum'];
    $username=$_SESSION['Busername'];
    $status=$_POST['status'];
    $query = $connection->prepare("UPDATE reciept SET status=?,byemp=? WHERE rrnum=?");
       $query->bind_param('sss',$status,$username,$rrnum);
        $query->execute();
        $query->store_result();
        $numRows = $query->affected_rows;
        if($numRows>0)
            {
                setcookie ( "msg", "Successful.", time()+60 );
            }
            else
            {
                 setcookie ( "msg", "Failed.", time()+60 );
            }
         $query->close();
         header('Location: bhtranscation.php');
?>
