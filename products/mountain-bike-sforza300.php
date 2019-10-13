<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title>Bikes</title>
  </head>
  <body>
      <div class="allPage">
    <?php include "header.php" ?>
    <?php include "connection.php" ?>
    <table class="tableGoods">
      <tbody>
      <?php
        $bikeQuery = "SELECT ProductsName, Price, ImagePath, Description FROM t8qugi00.Products join t8qugi00.Categories on Products.CategoryId = Categories.CategoryId WHERE CategoryName = 'bike';";
        
        if($result = mysqli_query($connection, $bikeQuery))
        {
          $colNro = 1;
          echo "<tr>";
          while($obj = mysqli_fetch_object($result))
          {
            if($colNro == 3)
            {
              echo "</tr>";
              echo "<tr>";
              $colNro = 0;
            }
            else {
              echo "<td class='tableGoods'>";
              echo "<img class='tableGoods' alt=" . $obj->ProductsName ." src=". $obj->ImagePath ." />";
              echo "<p class='tableGoods' align='bottom'>". $obj->ProductsName . " " . $obj->Price ."</p>";
              echo "</td>";
              $colNro++;
            }
          }
        }
        else {
          echo "<span>I didn't find anything now :( </span>";
        }
      ?>
    </tbody>
    </table>
    <?php include "footer.php" ?>
  </div>
  </body>

