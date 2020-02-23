<?php

$dsn = 'mysql:host=localhost;dbname=nippon'; // Data Source Name
$user = 'root';
$pass = '';
$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET Names utf8',
);
try{
$db =  new PDO($dsn,$user,$pass,$options);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo '<h1 style="text-align : center;">You Are Connected</h1><h1 style="text-align : center;">Welcome To Database</h1>';
}
catch(PDOException $e)
{
	echo "Failed To Connect : " . $e -> getMessage();
}
?>