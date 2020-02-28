<?php 
session_start();
if (isset($_SESSION['username'])) 
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
      		<i class="fas fa-briefcase" style="font-size: 162px;margin-bottom: -13px;padding: 30px;" ></i>
		    <h2 class="text-center" style="margin-top:70px;">Trips</h2>
      		<a href="jobs.php" class="text-center" style="color:white;">see Trips Reservation</a>
    	  </div>
  	</div>
  <div class="card text-white col-md-6 bg-success mb-3 dash_card" style="max-width: 18rem;border-radius:20px; margin-right: 15px;box-shadow: -7px 4px 1px 1px #39393a;">
    <div class="card-body">
      <i class="fas fa-users" style="font-size: 160px;margin-bottom: -13px;padding:30px;"></i>
      <h2 class="text-center" style="margin-top:70px;">Reviews</h2>
      <a href="users.php" class="text-center" style="color:white;">Goto Reviews Pages</a>
    </div>
  </div>
	<div class="card text-white col-md-6 bg-danger mb-3 dash_card" style="max-width: 18rem;border-radius:20px; margin-right: 15px;box-shadow: -7px 4px 1px 1px #39393a;">
    <div class="card-body">
      <i class="fas fa-users" style="font-size: 160px;margin-bottom: -13px;padding:30px;"></i>
      <h2 class="text-center" style="margin-top:70px;">Profile</h2>
      <a href="users.php" class="text-center" style="color:white;">Change The Password</a>
    </div>
  </div>
	</div>
</div>
    <h2>test</h2>
<?php
}
else
{
	header("Location:index.php");
}
?>