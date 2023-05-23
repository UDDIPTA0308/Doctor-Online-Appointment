<?php
session_start();

session_unset();
header('location:p_login.php');
?>