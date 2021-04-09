<?php
session_start();
unset($_SESSION['droits']);
header('Location: ../index.php');
