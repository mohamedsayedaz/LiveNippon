<?php
  include './init.php';
?>

<!-- First Banner -->
<div class="row jumbotron" id="trip-cover" style="margin:0px auto;">
  <h1 class="display-3 text-center s-b-t" >Japan Trips</h1>
  </div>

<!-- Second Banner -->
<div class="row jumbotron" style="margin:0px auto;">
  <h1 class="display-3" style="margin:0px auto;" >New Fit Tours <?php 
  $d = strtotime("today");
  echo date("Y",$d); ?></h1>
  </div>
<!-- Trips -->
<div class="jumbotron">
<?php 
  $sql = $db->prepare("Select id,trip_name,trip_img from trips");
  $sql->execute();
  $data = $sql->fetchAll();
  foreach ($data as $row => $value) {
    ?>
    <div class="row" >
        <div class="col-md-4" style="margin: 0 auto;">
          <img class="trip_img" src="./up/<?php echo $value[2]; ?>" />
        </div>
    </div>
    <p class="text-center trip-caption"><?php echo $value[1]; ?></p>
    <div class="center">
       <a href="the_trip.php?id=<?php echo $value[0]; ?>" class="btn-pdf nav-link btn btn-danger">Get Offer Details</a></div>
    <br/>
    <?php
  }
?>

<!-- row 4 -->
<div class="row" >
  <div class="col-md-4" style="margin: 0 auto;">
    <img class="trip_img" src="./img/trip.png" />
  </div>
</div>
<p class="text-center trip-caption">Custom Tour Japan</p>
<div class="center">
<a href="CustomTourJapan.php" class="btn-pdf nav-link btn btn-danger">Get Offer Details</a>  
</div>
</div>
</div>
<?php include './footer.php'; ?>