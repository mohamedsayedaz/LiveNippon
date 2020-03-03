<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') 
{
	$adminNavbar='';
	include './init.php';
	if(isset($_GET['do']) && $_GET['do'] == 'change' && $_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$sql = $db->prepare("Select password from users where username=?");
		$sql->execute(array('admin'));
		$data =$sql->fetchAll();
		 foreach ($data as $row => $value) 
	 	{
			$current_password= $value[0];
	 	}	
	
		$old_password = sha1($_POST['old_password']);
		$new_password = $_POST['new_password'];
		
		if($old_password == $current_password)
		{
				$sql = $db->prepare("Update `users` SET `password` = ? WHERE password =?");
				$sql->execute(array(sha1($new_password),$current_password));
				$count = $sql->rowCount();
				if($count > 0)
				{
					echo   '<div class="alert alert-success text-center alert-margin">Password Changed Successfully</div>';
				}
		}
		else{
			echo   '<div class="alert alert-danger text-center alert-margin">Old Password is Wrong</div>';
		}
	
	}
?>
<div class="container" style="margin-top: 100px;">
	<div class="row" >
		<div class="col-md-6" style="margin: 0 auto;">
			<h3>Change The Current Password:</h3>
			<p>enter the old password and the new password</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6" style="margin: 0 auto;">
			<form action="profile.php?do=change"  method="POST">
			
    			<input type="password" name="old_password" class="form-control password_group_control" placeholder="Old Password">
  		
    			<input type="password" name="new_password" class="form-control password_group_control" placeholder="New Password">
  			
  			 <button type="submit" class="btn btn-primary mb-2 password_group_control">Confirm identity</button>
		</form>
		</div>
	</div>
</div>
<?php
}
else
{
	header("Location: index.php");
}
?>