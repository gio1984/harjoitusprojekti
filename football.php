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
    <table class="tableGoods">
      <tbody>
      <?php
        $footballQuery = "SELECT ProductId, ProductsName, Price, ImagePath, Description FROM t8qugi00.Products join t8qugi00.Categories on Products.CategoryId = Categories.CategoryId WHERE CategoryName = 'football';";
        
        if($result = mysqli_query($connection, $footballQuery))
        {
          $colNro = 1;
          echo "<tr>";
          while($obj = mysqli_fetch_object($result))
          {
            if($colNro == 4)
            {
              echo "</tr>";
              echo "<tr>";
              $colNro = 1;
            }
            else {
              echo "<td class='tableGoods'>";
              echo "<a href='detail.php?id=" . $obj->ProductId . "'><img class='tableGoods' src=". $obj->ImagePath ." /></a>";
              echo "<p class='tableGoods' href='products/" . $obj->Link . "' align='bottom'>". $obj->ProductsName . " € " . $obj->Price ."</p>";
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


