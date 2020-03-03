<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') 
{

	$adminNavbar='';
	include './init.php';

	if(!isset($_GET['do'])  || $_GET['do'] == 'manage')
	{
		#Main Section
		$sql = $db ->prepare("Select ID,trip_name , SUBSTRING(details,1,30),cost,date From trips");
		$sql -> execute();
		$data = $sql->fetchAll();
?>
		<div class="container" style="margin-top:100px;margin-bottom:60px;">
<div class="row">
	<h2>My Trips</h2>
</div>
<div class="row">
	<a href="add_trip.php?do=add" class="btn btn-primary" style="margin-top: 10px;margin-bottom: 10px;">Add New Trip</a>
</div>
<div class="row">
<div class="table-responsive"> 
  <table  style="width: 180%;" class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Trip Name</th>
        <th scope="col">Details</th>
        <th scope="col">Cost</th>
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
	 		echo '<td>' . $value[2] . '...' . '</td>';
	 		echo '<td>' . $value[3] . '</td>';
	 		echo '<td>' . $value[4] . '</td>';
	 		echo '<td>' . '<a class="btn btn-danger" href="add_trip.php?do=delete&&id=' . $value[0] . '">Delete</a>'.'<a class="btn btn-success" href="add_trip.php?do=edit&&id=' . $value[0] . '" style="margin-left:10px;">Edit</a>'. '</td>';
	 	echo '</tr>';
	 }
?>	
   </tbody>
</table>
<?php
	}
	else if($_GET['do'] == 'add')
	{
		#Add Form
		?>
		<div id="add_trip_container" class="container"s>
			<div class="row">
				<div class="col-md-6" style="margin:0 auto;">
					<h2>Add New Trip</h2>
					<p>fill the trip info then press Save</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6" style="margin:0 auto;">
				<form method="POST" action="add_trip.php?do=insert">
				 <input type="text" name="t_name" class="form-control a_f" placeholder="Trip Name" />
				 <textarea rows="8" class="form-control a_f" name="t_details" placeholder="Trip Details"></textarea>
  				<input type="text" class="form-control a_f" placeholder="Trip Cost" name="t_cost"/>
  				 <input type="file" class="form-control a_f" name="img">
  				<button type="submit" class="btn btn-primary a_f">Save</button>
				</form>
				</div>
			</div>
		</div>
		<?php
	}
	else if($_GET['do'] == 'delete')
	{
		#Delete Code
	}
	else if($_GET['do'] == 'insert')
	{
		#insert code
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			echo '<h1 class="text-center" style="margin-top:20px;margin-bottom:10px;">Insert Trip</h1>';
            echo '<div class="container">';

			$trip_name = $_POST['t_name'];
			$trip_details = $_POST['t_details'];
			$trip_cost = $_POST['t_cost'];
			$trip_img = $_POST['img'];

			#validate
			$formsError = array();

			if(strlen($trip_name) == 0 ){
				$formsError[] = 'Trip Name Cannot Be <strong>Empty</strong>';
			}
			if(strlen($trip_details) ==0){
				$formsError[] = 'Trip Details Cannot Be <strong>Empty</strong>';
			}
			if(strlen($trip_cost) == 0){
				$formsError[] = 'Trip Cost Cannot Be <strong>Empty</strong>';
			}
			if(strlen($trip_img) == 0){
				$formsError[] = 'Trip Image Cannot Be <strong>Empty</strong>';
			}

			#print errors messages
			foreach ($formsError as $error)
    		{
         		echo '<div class="alert acess-denied alert-danger">' . $error . '</div>';
     		}
     		if(empty($formsError)){

$targetfolder = "up/" ;
   // Upload
    		 //Insert Into The Database
            
            $stmt = $db->prepare("INSERT INTO `trips`(`ID`, `trip_name`, `details`, `cost`, `date`, `trip_img`) VALUES (NULL, ?, ?,?,CURRENT_TIMESTAMP,?);");
            $stmt->execute(array($trip_name,$trip_details,$trip_cost,$trip_img));
            $count = $stmt->rowCount();
              //move_uploaded_file($_FILES['img']['tmp_name'],$targetfolder . $trip_imgf); 
    		 // Echo Success Message
            
     		 echo   '<div class="alert alert-success text-center alert-margin">' . $count . ' Trip(s) Inserted </div>';
     		}
		}
	}
	else if($_GET['do'] == 'Edit'){
		#editing form
	}
	else if($_GET['do'] == 'update')
	{
		#update code
	}
}
else
{
	header("Location:index.php");
}
?>