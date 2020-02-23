<?php

include './connect.php' ;
include './header.php';
	
if (isset($adminNavbar))
{
	include './adminnavbar.php';
}
else
{
	include './navbar.php';
}

?>
