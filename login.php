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

    echo '<p class="login">Welcome '.$_SESSION['username'].'</p><br>';
    echo '<p class="login">You already are logged in and you can continue your shopping</p>';
    echo '<form class="login" action="logout.php" method="post">';
    echo '<input class="button" type="submit" value="Log out">';
    echo '</form><br>';

  }

  else {
    if(isset($_GET['error']))
    {
        echo '<span class="error">Login failed user or password did not match</span>';
    }
    echo '<p class="login">Please login in to our site or create a new account</p>';
    echo '<form class="login" action="loginQuery.php" method="post">';
    echo 'User name: <input type="text" name="user" placeholder="User account"><br> <br>';
    echo 'Password: <input type="password" name="password" placeholder="Password"><br> <br>';
    echo '<input class="button" type="submit" value="Login">';
    echo '<br> <br>';
    echo '<span> Or create new account </span>';
    echo '<input class="button" type="submit" value="Create account">';
    echo '</form><br>';

  }
    ?>
    <?php include "footer.php" ?>
  </div>
  </body>
