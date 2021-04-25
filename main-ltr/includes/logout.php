<?php

session_start();

if(isset($_GET['logout-submit']) && $_GET['logout-submit'] == 'logout'){
  session_destroy();  
  
  echo "<script type='text/javascript'>localStorage.clear(); document.location = '../pages/auth_login2.php'; </script>";

  }
?>