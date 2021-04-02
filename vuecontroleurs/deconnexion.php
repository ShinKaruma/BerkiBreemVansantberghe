<?php
session_start();
$_SESSION['droits'] = null;
var_dump($_SESSION['droits']);
header('Location: ../index.php');
