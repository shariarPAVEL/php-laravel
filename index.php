<?php
  include_once "header.php";
?>

<h1>Home page</h1>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/slide1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
       <h3>Slide One</h3>
       <p>Slide one text!Slide one text!Slide one text!Slide one text!</p>
     </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
       <h3>Slide Two</h3>
       <p>Slide two text!Slide two text!Slide two text!Slide two text!</p>
     </div>
    </div>
    <div class="carousel-item">
      <img src="images/slide3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
       <h3>Slide Three</h3>
       <p>Slide three text!Slide three text!Slide three text!Slide three text!</p>
     </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<?php
  include_once "footer.php";
?>
