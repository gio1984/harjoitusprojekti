<?php include 'connection.php' ?>
<?php

session_start();
if (isset($_SESSION['logged_in'])) {
    $confirmQuery = "CALL ConfirmOrder('" . $_SESSION['username'] . "');";
    echo '<span>' . $confirmQuery .'</span>';
    //$resConf = mysqli_query($connection, $confirmQuery);
    echo '<span>' . $resConf . '</span><br>';
    if ($connection->query($confirmQuery)) {
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'home.php';
        header("Location: http://$host$uri/$extra");
    } else {
        echo '<span>false</span>';
        echo '<spna>' . $connection->error . '</span>';
        //$host = $_SERVER['HTTP_HOST'];
        //$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        //$extra = 'cart.php';
        //header("Location: http://$host$uri/$extra");
    }
} else {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'cart.php';
    header("Location: http://$host$uri/$extra");
}

