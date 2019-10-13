
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
        <a href="home.php"><span class="logo" ><img class="logo" alt="welcome" src="images\logoa.jpg"/></span></a>
        <span class="welcome">Welcome!! Please take a look to our products </span>
        <a href="login.php"><span class="account"><img class="account" alt="account" src="images\account.png"/></span></a>
        <a href="cart.php"><span class="cart"><img class="cart" alt="cart" src="images\cart.png" /></span></a>
      </div>
      <br>
    <div>
    <ul class="menu">
      <li class="menu"><a href="home.php">Home</a></li>
      <li class="menu"><a href="bikes.php">Bike</a></li>
      <li class="menu"><a href="footbal.php">Football</a></li>
      <li class="menu"><a href="outdoor.php">Outdoor</a></li>
      <li class="menu"><a href="about.php">About us</a></li>
      <li class ="menu"><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <br>
 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="images\prod1.png" style="width:100%">
    <div class="text">Bikes</div>
  </div>

  <div class="mySlides fade">
    <img src="images\prod2.jpg" style="width:100%">
    <div class="text">Football</div>
  </div>

  <div class="mySlides fade">
    <img src="images\prod3.jpg" style="width:100%">
    <div class="text">Outdoor</div>
  </div>
  
    <div class="mySlides fade">
    <img src="images\prod4.jpg" style="width:100%">
    <div class="text">Accessories</div>
  </div>
  
    <div class="mySlides fade">
    <img src="images\prod5.jpg" style="width:100%">
    <div class="text">The classics</div>
  </div>
  
    <div class="mySlides fade">
    <img src="images\prod6.jpg" style="width:100%">
    <div class="text">Best quality</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span> 
</div> 
  <br>
  
  
  <footer>
    <div class="foot">
      <a href="home.php"><p>Home</p></a>
      <a href="about.php"><p>About us</p></a>
      <a href="contacts.php"><p>Contact</p></a>
    </div>
  </footer>
  </div>
      
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


  </body>
</html>
