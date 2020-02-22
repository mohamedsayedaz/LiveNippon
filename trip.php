<?php
include './header.php';
include './navbar.php'; 
?>

<!-- First Banner -->
<div class="row jumbotron" id="trip-cover" style="margin:0px auto;">
  <h1 class="display-3 text-center s-b-t" >Japan Trips</h1>
  </div>

<!-- Second Banner -->
<div class="row jumbotron" style="margin:0px auto;">
  <h1 class="display-3" style="margin:0px auto;" >New Fit Tours 2019</h1>
  </div>
<!-- Trips -->
<div class="jumbotron">

  <!--row 1 -->
  <div class="row">
  <div id="carouselExampleInterval" class="carousel carousel-trip slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <img src="./img/mt-fuji1.jpg" class="d-block w-100 img-trip" alt="Mountain Fuji">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="./img/mt-fuji2.jpg" class="d-block w-100 img-trip" alt="Mountain Fuji">
      </div>
      <div class="carousel-item">
        <img src="./img/mt-fuji3.jpg" class="d-block w-100 img-trip" alt="Mountain Fuji">
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<p class="text-center trip-caption">Nikko Tour</p>
<div class="center">
  <a href="Nikko.php" class="btn-pdf nav-link btn btn-danger">Get Offer Details</a> 
</div>

<br/>
<!--row 2 -->
  <div class="row">
  <div id="carouselExampleInterval" class="carousel carousel-trip slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="./img/tokyo1.jpg" class="d-block w-100 img-trip" alt="Tokyo">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="./img/tokyo2.jpg" class="d-block w-100 img-trip" alt="Tokyo">
    </div>
    <div class="carousel-item">
      <img src="./img/tokyo3.jpg" class="d-block w-100 img-trip" alt="Tokyo">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<p class="text-center trip-caption">Tokyo Tour</p>
<div class="center">
<a href="Tokyo.php" class="btn-pdf nav-link btn btn-danger">Get Offer Details</a>  
</div>
<br/>
<!--row 3 -->
  <div class="row">
  <div id="carouselExampleInterval" class="carousel carousel-trip slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="./img/Nagano1.jpg" class="d-block w-100 img-trip" alt="Nagano">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="./img/Nagano2.jpg" class="d-block w-100 img-trip" alt="Nagano">
    </div>
    <div class="carousel-item">
      <img src="./img/Nagano3.jpg" class="d-block w-100 img-trip" alt="Nagano">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<p class="text-center trip-caption">Custom Tour</p>
<div class="center">
<a href="CustomTour.php" class="btn-pdf nav-link btn btn-danger">Get Offer Details</a>  
</div>
<br/>

<!-- row 4 -->
  <div class="row">
  <div id="carouselExampleInterval" class="carousel carousel-trip slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="./img/osaka1.jpg" class="d-block w-100 img-trip" alt="Osaka">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="./img/osaka2.jpg" class="d-block w-100 img-trip" alt="Osaka">
    </div>
    <div class="carousel-item">
      <img src="./img/osaka3.jpg" class="d-block w-100 img-trip" alt="Osaka">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<p class="text-center trip-caption">Custom Tour Japan</p>
<div class="center">
<a href="CustomTourJapan.php" class="btn-pdf nav-link btn btn-danger">Get Offer Details</a>  
</div>
</div>
</div>
<?php include './footer.php'; ?>