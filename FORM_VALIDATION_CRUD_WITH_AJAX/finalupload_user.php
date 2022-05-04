<?php

///UPLOAD PHP START HERE
$target_dir = "upload/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Allow certain file formats
if ($filetype != "docx" && $filetype != "pdf" && $filetype != "xlsx" && $filetype != "txt") {

  echo "Sorry, only PDF,DOCX and TXT files are allowed.";

  $uploadOk = 0;
  exit;
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
  exit;
}

// Check file size
//   if ($_FILES["fileToUpload"]["size"] > 500000)
//    {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
//   }



// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

  echo "Sorry, your file was not uploaded.";

  // if everything is ok, try to upload file

} else {

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    //header("Location: );
    // header("Location:show.php");

  } else {

    echo "Sorry, there was an error uploading your file.";
  }
}
