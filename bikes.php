<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title>Home</title>
  </head>
  <body>
    <?php include "header.php" ?>
    <?php include "connection.php" ?>
    <table class="tableGoods">
      <tbody>
      <?php
        $bikeArray = $connection->query("SELECT ProductsName, Price, ImagePath, Description FROM t8qugi00.Products join t8qugi00.Categories on Products.CategoryId = Categories.CategoryId WHERE CategoryName = 'bike';")->fetch_object();
        if($bikeArray->num_rows > 0)
        {
          $colNro = 1;
          echo "<tr>";
          for ($i = 0; $i < $bikeArray->num_rows; $i++)
          {
            if($colNro = 3)
            {
              echo "</tr>";
              echo "<tr>";
            }
            else {
              echo "<td class='tableGoods'>";
              echo "<img class='tableGoods'alt=" . ." src=". ." />";

            }
          }
        }
        else {
          echo "<span>I don't find anything now :( </span>";
        }
      ?>
    </tbody>
    </table>
    <?php include "footer.php" ?>
  </body>
