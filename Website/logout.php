<?php
session_start();
$_SESSION['token'] = 0;
$_SESSION['id'] = 0;
header('Location: index.php');   
?>