<?php
$data = $_POST;
$error = 0;
$msg = array();
if (count($data) > 0) {
  foreach ($data as $key => $value) {
    if (empty($value)) {
      $msg[$key] = $key . "  Is Required <br>";

      echo $msg;
      $error = 0;
    } else {
      $error = 1;
    }
  }
}
// echo "<pre>";
// echo print_r($data);
// echo "</pre>";
?>
<?php

// define variables and set to empty values
$nameErr = $name1Err = $emailErr = $passErr = $cpassErr = $genderErr = $addressErr = $mobilenoErr = $fileErr = $designationErr = "";
$name = $name1 = $email = $pass = $cpass = $gender = $address = $designation = $mobileno = $mobileno = "";

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
  $nameErr = "First Name is Required <br>";
} else {
  $name = ($_POST["name"]);
}
if (empty($_POST["name1"])) {
  $name1Err = "Last Name is Required <br>";
} else {
  $name1 = ($_POST["name1"]);
}

if (empty($_POST["email"])) {
  $emailErr = "Email is Required <br>";
} else {
  $email = ($_POST["email"]);
}
if (empty($_POST["password"])) {
  $passErr = "password is Required <br>";
} else {
  $pass = ($_POST["password"]);
}

if (empty($_POST["cpassword"])) {
  $cpassErr = "cpassword is Required <br>";
} else {
  $cpass = ($_POST["cpassword"]);
}
if (empty($_POST["Address"])) {
  $addressErr = "Address is Required <br>";
} else {
  $address = ($_POST["Address"]);
}

if (empty($_POST["MobileNo"])) {
  $mobilenoErr = "Mobile No Required <br>";
} else {
  $mobileno = ($_POST["MobileNo"]);
}

if (empty($_POST["designation"])) {
  $designationErr = "Please Select Designation <br>";
} else {
  $designation = ($_POST["designation"]);
}

if (empty($_POST["gender"])) {
  $genderErr = "Gender is required <br>";
} else {
  $gender = ($_POST["gender"]);
}
// if (empty($_POST["fileToUpload"])) {
//   $fileErr = "File is required <br>";
// } else {
//   $file = ($_POST["fileToUpload"]);
//}
//}
//echo $nameErr."<br>";
//exit;
?>