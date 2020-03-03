<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') 
{

	$adminNavbar='';
	include './init.php';
if(!isset($_GET['do']) || $_GET['do'] == 'Manage')
{
	$sql = $db ->prepare("Select `ID`,`Client_Name`,`Trip_Date`,`Email`,`Mobile`,`Total_Money`,`Date` From booking");
$sql -> execute();
$data = $sql->fetchAll();
?>

<div class="container" style="margin-top:100px;margin-bottom:60px;">
<div class="row">
	<h2>Reservations</h2>
</div>
<div class="row">
	<div class="col-md-12" style="margin-bottom: 10px !important;margin-top: 10px!important;">
		<a class="btn btn-danger" href="trip_reservation.php?do=search&&date=<?php echo date("Y/m/d"); ?>">Today</a>
		<a class="btn btn-danger" href="trip_reservation.php?do=search&&date=<?php $d=strtotime("yesterday");echo date("Y-m-d", $d); ?>">Yesterday</a>
		<form action="trip_reservation.php?do=search" style="display:inline;" method="post">
			<input type="date" name="date_in"/>
			<input type="submit" name="btn" value="Search"/>			
		</form>
	</div>
</div>
<div class="row">
<div class="table-responsive"> 
  <table  style="width: 180%;" class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Client Name</th>
        <th scope="col">Trip Date</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Total Bill</th>
        <th scope="col">Reservation Date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
<?php 
	#Print Data
	 foreach ($data as $row => $value) 
	 {
	 	echo '<tr>';
	 		echo '<td>' . $value[0] . '</td>';
	 		echo '<td>' . $value[1] . '</td>';
	 		echo '<td>' . $value[2] . '</td>';
	 		echo '<td>' . $value[3] . '</td>';
	 		echo '<td>' . $value[4] . '</td>';
	 		echo '<td>' . $value[5] . '</td>';
	 		echo '<td>' . $value[6] . '</td>';
	 		echo '<td>' . '<a class="btn btn-danger" href="trip_reservation.php?do=delete&&id=' . $value[0] . '">Delete</a>' . '</td>';
	 	echo '</tr>';
	 }
?>	
   </tbody>
</table>
<?php
}
else if ($_GET['do'] == 'delete') 
{
	#delete
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}
	else
	{
		header("Location:trip_reservation.php");
	}
	$sql = $db ->prepare("Delete From booking where ID=?");
	$sql->execute(array($id));
	$count = $sql->rowCount();
	if($count > 0)
	{
		echo   '<div class="alert alert-success text-center alert-margin">Deleted Successfully</div>';
	} 
}
else if($_GET['do'] == 'search')
{
	#search	
	$sql = $db ->prepare("Select `ID`,`Client_Name`,`Trip_Date`,`Email`,`Mobile`,`Total_Money`,`Date` From booking Where Date=?");

	if(isset($_POST['date_in']))
	{
		$date = $_POST['date_in'];
	}
	else
	{
		$date = $_GET['date'];
	}
	$sql->execute(array($date));
	$data = $sql->fetchAll();
?>
<div class="container" style="margin-top:100px;margin-bottom:60px;">
<div class="row">
	<h2>Reservations of <?php echo $date; ?></h2>
</div>
<div class="row">
	<div class="col-md-12" style="margin-bottom: 10px !important;margin-top: 10px!important;">
		<a class="btn btn-danger" href="trip_reservation.php?do=search&&date=<?php echo date("Y/m/d"); ?>">Today</a>
		<a class="btn btn-danger" href="trip_reservation.php?do=search&&date=<?php $d=strtotime("yesterday");echo date("Y/m/d", $d); ?>">Yesterday</a>
		<form action="trip_reservation.php?do=search" style="display:inline;" method="post">
			<input type="date" name="date_in"/>
			<input type="submit" name="btn" value="Search"/>			
		</form>
	</div>
</div>
<div class="row">
<div class="table-responsive"> 
  <table  style="width: 180%;" class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Client Name</th>
        <th scope="col">Trip Date</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Total Bill</th>
        <th scope="col">Reservation Date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
<?php 
	#Print Data
	 foreach ($data as $row => $value) 
	 {
	 	echo '<tr>';
	 		echo '<td>' . $value[0] . '</td>';
	 		echo '<td>' . $value[1] . '</td>';
	 		echo '<td>' . $value[2] . '</td>';
	 		echo '<td>' . $value[3] . '</td>';
	 		echo '<td>' . $value[4] . '</td>';
	 		echo '<td>' . $value[5] . '</td>';
	 		echo '<td>' . $value[6] . '</td>';
	 		echo '<td>' . '<a class="btn btn-danger" href="trip_reservation.php?do=delete&&id=' . $value[0] . '" >Delete</a>' . '</td>';
	 	echo '</tr>';
	 }
?>	
   </tbody>
</table>
<?php
}
}
else
{
	header("Location:index.php");
}
?>