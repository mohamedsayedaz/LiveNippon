<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') 
{

	$adminNavbar='';
	include './init.php';
	$sql = $db ->prepare("Select * From booking");
	$sql -> execute();
	$data = $sql->fetchAll();
?>
<div class="container" style="margin-top:100px;margin-bottom:60px;">
<div class="row">
	<h2>Reservations</h2>
</div>
<div class="row">
<div class="table-responsive"> 
  <table  style="width: 180%;" class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Comment</th>
        <th scope="col">Date</th>
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
	 		echo '<td>' . '<a href="trip_reservation.php?do=delete&&id=' . $value[0] . ' >Delete</a>' . '</td>';
	 	echo '</tr>';
	 }
?>	
   </tbody>
</table>
<?php 
}
else
{
	header("Location:index.php");
}
?>