<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != '') 
{

	include './init.php';
	

}else{
	header('Location:dashboard.php');
}