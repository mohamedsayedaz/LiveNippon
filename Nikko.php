<?php 
  include './init.php';
?>

<!-- First Banner -->
<div class="row jumbotron cover-trip tokyo_cover">
    <h1 class="display-3 text-center cov-title" id="htitle" >1 Day Nikko Tour with english speaking guide
    </h1>
  </div>
<div class="jumbotron" id="tokyo">
  <h1>Nikko Tour Details : </h1>
<p class="paragraph"> 
Discover the enchanting city of Nikko on an adventure from Tokyo with a like-minded host who can’t wait to share with you their favourite places to hang out, We will Pick you from your hotel from Tokyo ir outskirts of Tokyo and take you to heaven of Japan. Join your host to explore the city's historic landmarks and districts like the iconic Toshogu Shrine, the ornate Taiyuinbyo Shrine, the Rinnoji Temple, and then take in the astonishing landscapes of the area as you visit the Kegon Waterfall or Lake Chuzenji. You’ll also have the opportunity to sip fresh sake at a local brewery and indulge in a lunch of the city’s delicacies like ‘soba’ and ‘yuba’. Your like-minded host will create a bespoke experience for you and suggest an itinerary and agree upon a meeting time and place but you can always change your mind about what you want to do.

Inclusions
Private and personalised itinerary
Private Driver Cum Guide
Return travel from Tokyo to Nikko
Wifi On The go
Tools
Bottled Water

Exclusions
Food
Tickets to any attractions
Gratuities (optional)
Cost
65000¥

Please Contact us for the availability
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

<?php include './footer.php'; ?>