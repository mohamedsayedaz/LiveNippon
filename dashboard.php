<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') 
{

	$adminNavbar='';
	include './init.php';
?>
<div class="container" style="margin-top:50px;margin-bottom:60px;">
	<div class="row">
		<h1 class="dash_h1">Dashboard</h1>
	</div>
	<div class="row" style="margin:0px auto;margin-left:110px;">
 	 <div class="col-md-6 card text-white bg-primary mb-3 dash_card" style="">
    	  <div class="card-body">
      		<i class="fas fa-ticket-alt" style="font-size: 162px;margin-bottom: -13px;padding: 30px;" ></i>
		    <h2 class="text-center">Reservations</h2>
      		<a href="trip_reservation.php" class="text-center" style="color:white;">see Trips Reservation</a>
    	  </div>
  	</div>
  <div class="card text-white col-md-6 bg-success mb-3 dash_card">
    <div class="card-body">
      <i class="fas fa-star" style="font-size: 160px;margin-bottom: -13px;padding:30px;"></i>
      <h2 class="text-center">Reviews</h2>
      <a href="users.php" class="text-center" style="color:white;">Goto Reviews Pages</a>
    </div>
  </div>
	<div class="card text-white col-md-6 bg-danger mb-3 dash_card">
    <div class="card-body">
      <i class="fas fa-plus-circle" style="font-size: 160px;margin-bottom: -13px;padding:30px;"></i>
      <h2 class="text-center">Trips</h2>
      <a href="add_trip.php" class="text-center" style="color:white;">Add New Trip</a>
    </div>
  </div>
	</div>
</div>
<?php
}
else
{
	header("Location:index.php");
}
?>