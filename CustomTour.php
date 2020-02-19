<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./img/japan.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="style.css" rel="stylesheet" type="text/css"/>
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Changa" rel="stylesheet">
    <title>LiveNippon</title>
  </head>
  <body>
<!-- Navbar -->
<nav class="mynav navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html"><img class="logo" src="./img/logo.jpg" class="img-responsive" alt="Live Nippon" /></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav nav-div">
      <a class="nav-item nav-link nav-bar-link" href="index.html">Home</a>
      <a class="nav-item nav-link nav-bar-link" href="travel.html">Travel</a>
      <a class="nav-item nav-link nav-bar-link" href="trip.html">Trip</a>
      <a class="nav-item nav-link nav-bar-link" href="ContactUs.php">Contact Us</a>      
      <a class="nav-item nav-link nav-bar-link" href="About.html">About</a>
    </div>
  </div>
  </nav>

<!-- First Banner -->
<div class="row jumbotron cover-trip tokyo_cover">
    <h1 class="display-3 text-center cov-title" id="htitle" >Custom Tour
    </h1>
  </div>
<div class="jumbotron" id="tokyo">
  <h1>Custom Tour Details : </h1>
<p class="paragraph"> 
If you wish to have Private tour anywhere in Japan. We are happy to assist you with that.
For the Custom Tour we need to go step by step. This Custom made Trip is from 1 Day - 15 Days.

First Step:
Our Travel Specialist will probe you for your interest, Places where you want to go, Time Frame, Budget, Activities you are interested in.

Preparing your Itennairy

After Listening you carefully our Professional Travel Coordinator will make your itinerary based on your interests.
We will not charge you anything for making the itinerary.

Confirmation:

Once We will be on the same page about your trip plan. You need to pay 30% of the total amount of the Trip cost in Advance to confirm your reservations.

Final Itinerary:
Approximately 9 days before you leave you will receive your confirmed
itinerary, customized contact information, and detail down to where you'll meet by your drivers and Guides.

Your Journey Begins with us :
Your Guide and Driver will Pick you Everyday to Unfold Great insight of Japan. We will make sure your trip should be memorable.

Cancellation Policy:
You need to pay 30% of total quoted price in Advance to book the trip before 2 weeks of the trip. Rest of 70% will be paid 3 days before trip starting date. Company Has to make reservations according to your itinerary.
In Case of Cancellation 30% is not refundable
.
</p>
  <form method="post" action="sendmail.php">
  <div class="form-group row">
    <label for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="name" name="name">
    </div>
  </div>
    <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="Email" name="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="PhoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="PhoneNumber" name="PhoneNumber">
    </div>
  </div>
    <div class="form-group row">
    <label for="Count" class="col-sm-2 col-form-label">How many people are traveling</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="Count" name="Count">
    </div>
  </div>
      <div class="form-group row">
    <label for="Date" class="col-sm-2 col-form-label">Expected Dates</label>
    <div class="col-sm-10">
      <input type="date" class="form-control-plaintext" id="date" name="date">
    </div>
  </div>
      <div class="form-group row">
    <label for="Count" class="col-sm-2 col-form-label">Where do you want to go</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="Destination" name="Destination">
    </div>
  </div>
<!--  <a href="" class="btn btn-center btn-danger">Send</a> -->
<button class="btn btn-center btn-danger" type="submit">Send</button>
</form>
</div>

<div class="footer">
  <p style="margin:0px;">All Copyrights &copy; 2019 Reserved to LiveNippon</p>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>