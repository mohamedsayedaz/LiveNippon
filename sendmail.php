<?php
    session_start();
	$name = $_POST['name'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Count = $_POST['Count'];
    $date = $_POST['date'];
    $Destination = $_POST['Destination'];

    //Send Mail To Client

$message = "Dear LiveNippon , " . "Hi I'm " . $name . " And my PhoneNumber is " . $PhoneNumber . " and The People They Will Travel are " .  $Count . " Person(s) And The Expected Date Is " . $date . " and The Destination Is " . $Destination . "my Email is " . $Email; 
//$message = "Test 4";
// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");
// Send
mail('Travel@livenippon.com','LiveNippon', $message);
header('Location: index.html');
?>