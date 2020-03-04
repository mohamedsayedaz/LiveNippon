<?php 
session_start();
include 'init.php';
$targetfolder = "up/" ;
   			// Upload
   			$filename = $_FILES['file']['name'];
			$fileTemp = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];   
			$fileType =$_FILES['file']['type'];
	$fileAllowExtension = array('jpeg','png','jpg','doc','docx','pdf','txt','gif','');

//Get Extension
$fileExtension = strtolower(end(explode('.',$filename)));

if(!in_array($fileExtension,$fileAllowExtension  )){
  echo 'The Uploaded File Extension <strong>Not Supported</strong>';
}
 if($filename != ''){
    $realfile = rand(0,1000000) . '_' . $filename;
    move_uploaded_file($fileTemp,$targetfolder . $realfile); 
   }else{
     $realfile = '';
   }
  // header('Location:add_trip.php?do=manage');
?>