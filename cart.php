<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <title>Football</title>
    </head>
    <body>
        <div class="allPage">
            <?php include "header.php" ?>
            <?php include "connection.php" ?>
            <table class="tableCart">
                <?php
                session_start();
                if (isset($_SESSION['logged_in'])) {
                    $cartQuery = "SELECT ProductsName, Quantity, Price FROM t8qugi00.Products join Cart on Products.ProductId = Cart.ProductId join Customers on Cart.CustomerId = Customers.CustomerId where UserName ='" . $_SESSION['username'] . "';";
                    //echo '<span>' . $cartQuery . '</span>';
                    if ($resultCart = mysqli_query($connection, $cartQuery)) {
                        echo '<tr class="tableCart">';
                        echo '<th class="tableCart">Product</th>';
                        echo '<th class="tableCart">Qty</th>';
                        echo '<th class="tableCart">Total</th>';
                        echo '</tr>';
                        while ($obj = mysqli_fetch_object($resultCart)) {
                            echo "<tr class='tableCart'>";
                            echo "<td class='tableCart'>" . $obj->ProductsName . "</td>";
                            echo "<td class='tableCart'>" . $obj->Quantity . "</td>";
                            echo "<td class='tableCart'>" . ($obj->Quantity * $obj->Price) . "</td>";
                            echo "</tr>";
                        }
                        echo"<br>";
                        echo '<form method="post" action="confirm.php">';
                        echo '<input class="button" type="submit" value="Confirm order">';
                        echo '</form>';
                    } else {
                        echo "<span>I didn't find anything now :( </span>";
                    }
                } else {
                    echo '<p class="login">You are not logged in</p>';
                }
                ?>
            </table>
            <?php include "footer.php" ?>
        </div>
    </body>




