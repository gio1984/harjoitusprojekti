<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title>Login</title>
  </head>
  <body>
      <div class="allPage">
    <?php include "header.php" ?>
    <?php include "connection.php" ?>
    <?php
        session_start();

  if(isset($_SESSION['logged_in'])) {

    echo '<p class="login">Welcome '.$_SESSION['username'].'</p>';

  }

  else {
    if(isset($_GET['error']))
    {
        echo '<span class="error">Login failed user or password didn"t match</span>';
    }
    echo '<p class="login">Please login in to our site or create a new account</p>';
    echo '<form class="login" action="loginQuery.php" method="post">';
    echo 'User name: <input type="text" name="user" placeholder="User account"><br> <br>';
    echo 'Password: <input type="password" name="password" placeholder="Password"><br> <br>';
    echo '<input type="submit" value="Login">';
    echo '<br> <br>';
    echo '<span> Or create new account </span>';
    echo '<input type="submit" value="Create New">';
    echo '</form>';

  }
    ?>
    <?php include "footer.php" ?>
  </div>
  </body>
