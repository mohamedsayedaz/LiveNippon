<?php
session_start();
include './init.php';
if (isset($_GET['log'])) {
    if($_GET['log']==0)
    {
      $_SESSION['username'] ='';      
    }
}
?>
<!-- First Banner -->
<div class="jumbotron f-ban row" style="margin:0 auto;">
  <div class="col-md-8" style="margin:0 auto;margin-top:70px;">
    <h1 class="text-center f-b-t">Win A Cool Local Tour Of Shimokitazawa</h1>
  </div>
  </div>
<!-- Second Banner -->  
<div class="jumbotron s-ban">
  <div class="row">
    <div class="col-md-6" style="margin:0 auto;"> 
      <h1 class="text-center s-b-t">Our Best Sellers Packages</h1>
    </div>
  </div>
  <p class="text-center lead mylead">Our best sellers packages are Mt Fuji 1 day tour which include lake Kawaguchi, Oshino Hakkai, Niko 2 Days tour , Yuzawa sight seeing, Tokyo Skytree , Best local food Tour, Japanese traditional dress, sumo wrestling,</p>
  </div>
<!-- Contact Us -->
<div id="ContactUs" class="jumbotron">
  <div class="row">
    <div class="col-md-4 con-text">
     <div class="row contact">
      <h1 class="text-center contactT">Why Book with Us</h1>
      <p class="text-center contactp">In Our Team We are Local Japanese English Speaking Staff and Native English Guide. Our Well Trained Staff will try there best to make your trip memorable. We are Serving in Tourism Industry Since 15. We Grow as the market grow.</p>
     </div>
    </div>
    <div class="col-md-4 col-back">
        <div class="col">
          <h3 class="ptitle"><img class="img-responsive r-icon" src="./img/r.jpg" alt=""/>100% Customizable</h3>
          <p class="pparag">Tell us about your trip requirement. We'll work together to customize your trip to meet your exact requirement so that you have a memorable trip.</p>
        </div>
        <div class="col">
          <h3 class="ptitle"><img class="img-responsive r-icon" src="./img/r.jpg" alt=""/>Local Experts. Japanese and English Speaking Staff</h3>
          <p class="pparag">Local Experienced friendly Staff will help you travel around Japan.</p>
        </div>
    </div>
    <div class="col-md-4 col-back">
        <div class="col">
          <h3 class="ptitle"><img class="img-responsive r-icon" src="./img/r.jpg" alt=""/>Local Experts. Japanese and English Speaking Staff</h3>
          <p class="pparag">Local Experienced friendly Staff will help you travel around Japan.</p>
        </div>
        <div class="col">
          <h3 class="ptitle"><img class="img-responsive r-icon" src="./img/r.jpg" alt=""/>No Hidden Charges</h3>
          <p class="pparag">We don't add hidden extras cost. . There are no surprises with hidden costs.</p>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<?php include './footer.php'; ?>