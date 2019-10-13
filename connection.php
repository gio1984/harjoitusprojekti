<?php

$host = 'localhost';
$dbname = 't8qugi00';
$username = 't8qugi00';
$password = 'Gio1984';
  try {
    $connection = mysqli_connect($host,$username,$password,$dbname);
    } catch (\Exception $e) {
      //print ("Cannot connect" . $e);
      echo "<span>Failed to connect to MySQL: " . mysqli_connect_error() . " " . $e . "</span><br>";
  }

  //if(mysqli_connect_errno())
  //{
    //echo "<span>Failed to connect to MySQL: " . mysqli_connect_error() . "</span><br>";
  //}
  //else {
    //echo "<span>Ok</span>";
  //}

 ?>
