<?php 
session_start();
if (isset($_SESSION['username'])) 
{
	$adminNavbar='';	
	include './init.php';
?>
<div class="container" style="margin-top:100px;margin-bottom:60px;">
<div class="row" style="margin:0px auto;margin-left:110px;">
  <div class="col-md-6 card dash-card text-white bg-primary mb-3" style="max-width: 18rem;border-radius:20px;">
      <div class="card-body">
      <i class="fas fa-briefcase" style="font-size: 162px;margin-bottom: -13px;padding: 30px;" ></i>
      <h2 class="text-center" style="margin-top:70px;">Jobs</h2>
      <a href="jobs.php" class="text-center" style="color:white;">Trips</a>
    </div>
  </div>
  <div class="card text-white col-md-6 dash-card bg-success mb-3" style="max-width: 18rem;border-radius:20px;">
    <div class="card-body">
      <i class="fas fa-users" style="font-size: 160px;margin-bottom: -13px;padding:30px;"></i>
      <h2 class="text-center" style="margin-top:70px;">Users</h2>
      <a href="users.php" class="text-center" style="color:white;">Reviews</a>
    </div>
  </div>
<div class="card text-white col-md-6 dash-card bg-danger mb-3" style="max-width: 18rem;border-radius:20px;">
    <div class="card-body">
      <i class="fas fa-users" style="font-size: 160px;margin-bottom: -13px;padding:30px;"></i>
      <h2 class="text-center" style="margin-top:70px;">Website</h2>
      <a href="users.php" class="text-center" style="color:white;">Manage The Users</a>
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