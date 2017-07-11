<?php
  session_start();
  if(isset($_SESSION['Buid']))
  {

  }
  else
  {

    header("Location: Blogin.php");
  }
 ?>
