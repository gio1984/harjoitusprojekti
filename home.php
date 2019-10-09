
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title>Home</title>
  </head>
  <body>
    <div class="allPage">
      <div class="header">
        <p><img alt="header" src="images\header1.jpg" /></p><br>
        <span class="logo" href="home.html"><img class="logo" alt="welcome" src="images\logoa.jpg"/></span>
        <span class="welcome">Welcome!! Please take a look to our products </span>
        <span class="account"><img class="account" href="login.php" alt="account" src="images\account.png"/></span>
        <span class="cart"><img class="cart" href="cart.php" alt="cart" src="images\cart.png" /></span>
      </div>
      <br>
    <div>
    <ul class="menu">
      <li class="menu"><a href="home.html">Home</a></li>
      <li class="menu"><a href="bikes.php">Bike</a></li>
      <li class="menu"><a href="footbal.php">Football</a></li>
      <li class="menu"><a href="volley.php">Volley</a></li>
      <li class="menu"><a href="outdoor.php">Outdoor</a></li>
      <li class="menu"><a href="about.php">About us</a></li>
      <li class ="menu"><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <br>
  <?php include "connection.php"; ?>
    <table class="tableGoods">
    <tbody>
      <tr style="height: 0px;">
        <td class="tableGoods">
          <img class="tableGoods" alt="prod1" src="images\prod1.png" />
          <a class="tableGoods" align="bottom">Bike € 200,00</a>
        </td>
        <td class="tableGoods">
          <img class="tableGoods" alt="prod2" src="images\prod2.jpg" />
          <a class="tableGoods" align="bottom">Ball € 20,00</a>
        </td>
        <td class="tableGoods">
          <img class="tableGoods" alt="prod3" src="images\prod3.jpg" />
          <a class="tableGoods" align="bottom">Tent € 89,00</a>
        </td>
      </tr>
      <tr style="height: 80px;">
        <td class="tableGoods">
          <img class="tableGoods" alt="prod4" src="images\prod4.jpg" />
          <a class="tableGoods" align="bottom">Helm € 65,00</a>
        </td>
        <td class="tableGoods">
          <img class="tableGoods" alt="prod5" src="images\prod5.jpg" />
          <a class="tableGoods" align="bottom">Football shoe vintage € 100,00</a>
        </td>
        <td class="tableGoods">
          <img class="tableGoods" alt="prod6" src="images\prod6.jpg" />
          <a class="tableGoods" align="bottom">Outdoor shoe € 150,00</a>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <footer>
    <div class="foot">
      <p href="home.html">Home</p>
      <p href="">About us</p>
      <p href="">Contact</p>
    </div>
  </footer>
  </div>

  </body>
</html>
