<?php
session_start();
session_destroy();
header("Location: login.php");
header("Location: admin_login.php");
  
?>