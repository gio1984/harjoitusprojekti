<?php include 'connection.php' ?>
<?php
session_start();
if (isset($_SESSION['logged_in'])) {
    $accountQuery = "SELECT CustomerId from Customers where UserName='" . $_SESSION['username'] . "';";
    if ($accountId = mysqli_query($connection, $accountQuery)) {
        $obj = mysqli_fetch_object($accountId);
        $idProd = $_GET['idProd'];
        $qty = $_POST['qty'];
        $insertQuery = "insert into Cart values (null," . $obj->CustomerId . "," . $idProd . "," . $qty . ");";
        echo '<p>'. $insertQuery . ' </p>';
        if ($inserted = mysqli_query($connection, $insertQuery)) {
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'cart.php?id=' . $idProd;
            header("Location: http://$host$uri/$extra");
        }
    }
} else {
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'cart.php?id=' . $idProd .'&error=noinserted';
    header("Location: http://$host$uri/$extra");
}


