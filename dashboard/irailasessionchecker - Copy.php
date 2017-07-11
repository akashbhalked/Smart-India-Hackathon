<?php
  session_start();
  if(isset($_SESSION['Rauid']))
  {

  }
  else
  {

    header("Location: ieaadminlogin.php");
  }
 ?>
