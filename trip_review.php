<?php 
include './connect.php' ;
if($_SERVER['REQUEST_METHOD'] != 'POST')
{
	header('Location:trip.php');
}
$client_name = $_POST['c_name'];
$email =$_POST['c_email'];
$comment = $_POST['c_comment'];
$t_id = $_POST['trip_id'];

$sql = $db->prepare('INSERT INTO `reviews`(`ID` , `Name`, `Email`, `Comment`, `trip_id` ,`date`) VALUES(NULL,?,?,?,?,CURRENT_TIMESTAMP);');
$sql->execute(array($client_name,$email,$comment,$t_id));
$count = $sql->rowcount();
if($count > 0){
	header('Location:the_trip.php?id=' . $t_id);
}else{
	echo '<h4 class="danger">Something went wrong while sending the review try again </h4>';
}
?>