<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') 
{

	$adminNavbar='';
	include './init.php';

	if($_GET['do'] == 'manage' || !isset($_GET['do']))
	{
		#Main Section
	}
	else if($_GET['do'] == 'add')
	{
		#Add Form
	}
	else if($_GET['do' == 'delete'])
	{
		#Delete Code
	}
	else if($_GET['do'] == 'insert')
	{
		#insert code
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