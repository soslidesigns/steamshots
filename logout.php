<?php
header('Location: http://www.soslidesigns.com/steamshots/index.php'); // Change this to where you want logged out users to be redirected to.
session_start();
unset($_SESSION['steamid']);
?>


