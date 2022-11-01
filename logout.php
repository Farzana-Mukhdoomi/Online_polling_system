<?php

session_start();
unset($_SESSION['user_email']);
unset($_SESSION['user_name']);
unset($_SESSION['id_generated']);     //to take care of bogus votes, restricits acees from URL
session_destroy();
header("location:login.php");

?>
