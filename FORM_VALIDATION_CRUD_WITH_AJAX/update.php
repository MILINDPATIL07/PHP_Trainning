<?php

session_start();
require 'dbconnect.php';
require 'finalupload_user.php';
//var_dump($_POST);
$id=$_POST['id'];
$fn = $_POST['name'];
$ln = $_POST['name1'];
$email = $_POST['email'];
$pw = $_POST['password'];
$add = $_POST['Address'];
$mb = $_POST['MobileNo'];
$drop = $_POST['designation'];
$gd = $_POST['gender'];
$file=$_FILES["fileToUpload"]["name"];
//$fu=$_SESSION['target_file'];
//$fl = $_FILES['fileToUpload']['name'];

$qry="UPDATE emp SET fname='".$fn."',lname='".$ln."' ,email='".$email."' ,address='".$add."',mobile='".$mb."' ,password='".$pw."' ,designation='".$drop."' ,gender='".$gd."',file='".$file."'  WHERE id=$id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	echo "Record Updated Sucessfully";
	 header("location:show.php");
	 exit();
}
else
{
	echo "Error...";
}
?>