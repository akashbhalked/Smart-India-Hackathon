<?php
  session_start();
  if(isset($_SESSION['Bauid']))
  {

  }
  else
  {

    header("Location: bhadmin_login.php");
  }
 ?>
