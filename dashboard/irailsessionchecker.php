<?php
  session_start();
  if(isset($_SESSION['Ruid']))
  {

  }
  else
  {

    header("Location: Rlogin.php");
  }
 ?>
