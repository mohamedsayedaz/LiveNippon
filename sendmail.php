<?php
	include './connect.php' ;
    session_start();
	$name = $_POST['name'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Count = $_POST['Count'];
    $date = $_POST['date'];
    $Destination = $_POST['Destination'];
    $trip_id = $_POST['trip_id'];

    #Book The Trip
    $sql = $db->prepare("Select trip_name , cost from trips where id=?");
    $sql->execute(array($trip_id));
    $row = $sql->fetch();
    $trip_name = $row[0];
    $trip_cost = $row[1];

    //Send Mail To Client
    $sql = $db->prepare("INSERT INTO `booking`(`Client_Name`, `Email`, `Mobile`, `trip_name`, `Total_Money`, `Trip_Date`) VALUES (?,?,?,?,?,?)");
    $sql ->execute(array($name,$Email,$PhoneNumber,$trip_name,$trip_cost,$date));

$message = "Dear LiveNippon , " . "Hi I'm " . $name . " And my PhoneNumber is " . $PhoneNumber . " and The People They Will Travel are " .  $Count . " Person(s) And The Expected Date Is " . $date . " and The Destination Is " . $Destination . "my Email is " . $Email; 
//$message = "Test 4";
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");
// Send
mail('Travel@livenippon.com','LiveNippon', $message);
header('Location: index.php');
//
?>