<?php
$filename=$_FILES['CV']['name'];
$ext = "." . pathinfo($filename, PATHINFO_EXTENSION);
 



if($_FILES["CV"]["size"]>60000000) //60 mb
	{
	echo "CV size should be less than 60MB, please press back and try again.";	
	exit();
	}
if($ext=='.doc' || $ext=='.docx'  || $ext=='.pdf' || $ext=='.txt' || $ext=='.rtf' )
{
}
else
	{
	echo "Only docx, doc, pdf, rtf, and txt files are allowed, please press back and try again.";
	exit();
	}
	
	

 $firstname=mysql_real_escape_string($_POST['firstname']); 
 $middlename=mysql_real_escape_string($_POST['middlename']); 
 $lastname=mysql_real_escape_string($_POST['lastname']); 
 $number=mysql_real_escape_string(preg_replace('/[^0-9]/', '', $_POST['number'])); 
 $email=mysql_real_escape_string($_POST['email']); 
 $university=mysql_real_escape_string($_POST['university']); 
 $educationallevel=mysql_real_escape_string($_POST['educationallevel']); 
 $graduationyear=mysql_real_escape_string($_POST['graduationyear']); 
 $degreefield=mysql_real_escape_string($_POST['degreefield']);  
 $futurecareer=mysql_real_escape_string($_POST['futurecareer']);  
 $nationality=mysql_real_escape_string($_POST['nationality']);  
 $additionalinformation=mysql_real_escape_string($_POST['additionalinformation']);  
 $hearaboutconference=mysql_real_escape_string($_POST['hearaboutconference']);  
 $consent=mysql_real_escape_string($_POST['consent']);  
 $stream=mysql_real_escape_string($_POST['stream']);  
 mysql_connect("localhost", "scc_finance_nfw", "RyYKQSvWLfupuacd") or die(mysql_error()); 
 mysql_select_db("scc_finance_nfw") or die(mysql_error()); 
 mysql_query("INSERT INTO `applications` VALUES ('$firstname', '$middlename', '$lastname', '$number', '$email', '$university', '$educationallevel', '$graduationyear', '$degreefield', '$futurecareer', '$nationality', '$additionalinformation', '$hearaboutconference', '$consent', DEFAULT, '$stream', DEFAULT)"); 
 $uniqueid = mysql_insert_id();

 $target_path = "upload/";

 $target_path = $target_path . $uniqueid . $ext; 






if(move_uploaded_file($_FILES['CV']['tmp_name'], $target_path)) {
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=thankyou">'; 
} else{
	echo "There was an error uploading the file, please press back and try again.";
}



?>

