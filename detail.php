    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title>Product detail</title>
  </head>
  <body>
      <div class="allPage">
    <?php include "header.php" ?>
    <?php include "connection.php" ?>
<?php
if(isset($_GET['id'])){
    $idProd = $_GET['id'];
    echo '<div class="detail">';
    $detailQuey = "SELECT * FROM Products WHERE ProductId = '" . $idProd . "';";
    $detailResult = mysqli_query($connection, $detailQuey);
    $obj = mysqli_fetch_object($detailResult);
    echo '<div class="photoDetail">';
    echo '<img src="'. $obj->ImagePath . '"/>';
    echo '</div>';
    echo '<div class="descDetail">';
    echo '<span>'. $obj->ProductsName .'</span><br><br>';
    echo '<span>' . $obj->Description . '</span><br><br>';
    echo '<span> € ' . $obj->Price . '</span><br><br>';
    echo '<form action="addcart.php">';
    echo '<input type="number" name="qty" value="1">';
    echo '<input type="submit" value="Add to cart">';
    echo '</form>';
    echo '</div>';
    echo '</div>';

}
else
{
    echo "<span> There isn't id to search </span>";
}
?>
  <?php include "footer.php" ?>
  </div>
  </body>

