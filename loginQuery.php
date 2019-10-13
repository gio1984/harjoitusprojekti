<?php include 'connection.php' ?>
<?php

  $passLogin=$_POST['password'];

  $userLogin=$_POST['user'];
  
  $stmt=$connection->prepare("SELECT Password from Customers where UserName=?");
  
  $stmt->bind_param('s', $userLogin);
  $stmt->execute();
  $stmt->bind_result($realPassword);
  $stmt->fetch();
  $hashPass = password_hash($realPassword, PASSWORD_DEFAULT);

  if(password_verify($passLogin, $hashPass)) {

    session_start();
    $_SESSION['logged_in']=true;
    $_SESSION['username']=$userLogin;
    echo '<span>session on </span>';
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'home.php';
        header("Location: http://$host$uri/$extra");
    $stmt->close();
  }

  else {
      echo'<span>session out</span>';
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'login.php?error=wronglogin';
        header("Location: http://$host$uri/$extra");
      $stmt->close();
  }


