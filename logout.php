<?php
session_start();
session_destroy();
header("Location: adminlogin.php"); // Redirect to the login page after logout
?>