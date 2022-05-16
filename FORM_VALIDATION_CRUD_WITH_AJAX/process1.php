<?php
session_start();
require 'dbconnect.php';
//include 'finalupload_user.php';
if (isset($_POST) && count($_POST) > 0) {
	include "validate.php";
	if ($error == 0) {
		print_r($msg);
		//echo "failed to submit form";
		$_SESSION['error_message'] = $msg;
		// header('Location:index.php');
		//exit();
	}

	$fn = $_POST['name'];
	$ln = $_POST['name1'];
	$email = $_POST['email'];
	$pw = $_POST['password'];
	$cw = $_POST['cpassword'];
	$add = $_POST['Address'];
	$mb = $_POST['MobileNo'];
	$drop = $_POST['designation'];
	$gd = $_POST['gender'];
	$file = $_FILES["fileToUpload"]["name"];
    //$rfile=rand().$file;

	// $fu=&
	// $fu=$_SESSION['target_file'];
	if ($pw != $cw) {
		header('Location:jsform.php?pass=password and cpassword doesnot match');
		// echo "password and cpassword doesnot match";
		exit();
	}
	//check if alrady exist 

	$qry1 = "SELECT * FROM emp where email = '" . $email . "' ";
	$rs1 = mysqli_query($conn, $qry1);
	if (mysqli_num_rows($rs1) > 0) {
		//  echo"$qry";
		// $_SESSION['error_email_message'] = "EMAIL ALREADY EXIST";
		header('Location:jsform.php?email=EMAIL ALREADY EXIST');
		exit();
	}

	if ($fn != "" && $ln != "" && $email != "" && $pw != "" && $add != "" && $mb != "" && $drop != "" && $file != "") {
		// file upload start from here..
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		//$target_file = $target_dir . "101_" . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Check file size

		if ($_FILES["fileToUpload"]["size"] > 500000) {

			echo "Sorry, your file is too large.";

			$uploadOk = 0;
		}

		// Allow certain file formats

		if ($filetype != "docx" && $filetype != "xlsx" && $filetype != "txt" && $filetype != "pdf") {

			echo "Sorry, only PDF,DOC and XLS files are allowed.";

			$uploadOk = 0;
		}
		//check if file is already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
			// header("Location:index.php");
			//exit;
		}
		// Check if $uploadOk is set to 0 by an error

		if ($uploadOk == 0) {

			echo "Sorry, your file was not uploaded.";

			// if everything is ok, try to upload file

		} else {

			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

				// echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
				$qry = "INSERT INTO emp(fname,lname,email,address,mobile,password,designation,gender,file) VALUES('" . $fn . "','" . $ln . "','" . $email . "','" . $add . "','" . $mb . "','" . $pw . "','" . $drop . "','" . $gd . "','" . $rfile . "')";
				// echo "$qry";
				$rs = mysqli_query($conn, $qry);
				if ($rs) {
					//echo "Insert SUCCESS";
					header("location:login.php");
					//exit();
				} else {
					echo "<center>" . "ERROR: Sorry $sql. " . mysqli_error($conn) . "</center><br>";
					//header("location:jsform.php");
				}
			} else {

				echo "Sorry, there was an error uploading your file .";
			}
		}
	} else {
		echo "Error ..!  Please Select All Required Fields";
	}
}
