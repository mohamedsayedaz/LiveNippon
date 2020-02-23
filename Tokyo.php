<?php 
   include './init.php';
?>

<!-- First Banner -->
<div class="row jumbotron cover-trip tokyo_cover">
    <h1 class="display-3 text-center cov-title" id="htitle" >Tokyo 1 Day trip with English Speaking Guide
    </h1>
  </div>
<div class="jumbotron" id="tokyo">
  <h1>Tokyo Tour Details : </h1>
 <!-- <h2 style="color:#ed1b24;">Cost 55000¥</h2> -->
<p class="paragraph"> 
OverView
Nakamise Street a Beautiful (Japanese Traditional Street) Surrounded by Japanese Traditional Souvenir Shops, Food Vendors, Smell of Japanese History. You will See Asakusa Kannon Temple (Senso Ji) one of Japan’s most important Buddhist sites and check out the elaborate gardens, architecture and shrines that surround the site. Our next Stop would be Japan Tallest Building Skytree Where you c. Please let us know what kind of food you would like to have.
Our next stop would be the Imperial Palace Outside. We will take a look and some pictures from the Imperial Palace.
We will Head to Meiji Jingu Shrine from Imperial Palace. Meiji Shrine is the most respected shrine in Japan. This shrine is dedicated to divine souls of Emperor Meiji and his consort Empress shoken.
Then we will head to Shibuya Scramble Crossing, the most Busiest Crossing of World. Head up to Harajuku The Japan Fashion Hub. You can also visit different kind of Cafes here. Owl Cafe, Cat Cafe.
Inclusions
Bottled water
Private transportation
WiFi on board
Air-conditioned vehicle
Entry/Admission - Nakamise Shopping Street (Kaminarimon)
Exclusions
Entry to Any Place
Entry/Admission - Tokyo Skytree
Entry/Admission - Imperial Palace
Entry/Admission - Meiji Jingu Shrine
Cost: Please Contact us For the best Price.

We are open to your suggestions.</p>
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
<?php include './footer.php'; ?>