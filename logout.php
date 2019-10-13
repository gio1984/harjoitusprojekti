<?php

session_start();
session_destroy();
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'home.php';
header("Location: http://$host$uri/$extra");


