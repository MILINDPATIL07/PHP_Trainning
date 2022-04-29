<?php
 require("dbconnect.php");
 if(isset($_POST['submit']))
 {
        $data=$_POST['checkbox'];
     if(!empty($_POST['checkbox']))
     {
        $form_data= $_POST['checkbox'];
        $form_data= implode(",",$_POST['checkbox']);
        //echo $form_data;
     }
     foreach($data as $key=>$value)
     {
         //$query="INSERT INTO checkbox1 VALUES ('','".$value."','')";
         $query="INSERT INTO `table1`(`id1`, `checkbox1`) VALUES ('','$value')";

        // echo $query;
         echo "<pre>";
         print_r($data); 
         echo"</pre>";
         $data=mysqli_query($conn,$query);   
         //echo $data;  
     }
     if($data)  
     {
         echo "Data Inserted Successfully";
         header('Location:index1.php');
     }     
     else
     {
        echo "Data Insertion Failed";
     }
    
     $form_data=$_POST['checkbox'];

     $form_data=implode(",", $_POST['checkbox']);
 }
?> <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> table 1 data </title>
    </head>

    <body>

        <form method="POST" action="">
            <center>
            <input type="checkbox" name="checkbox[]" value="checkbox1">checkbox1
            <br>
            <input type="checkbox" name="checkbox[]" value="checkbox2">checkbox2
            <br>
            <input type="checkbox" name="checkbox[]" value="checkbox3">checkbox3
            <br>
            <input type="checkbox" name="checkbox[]" value="checkbox4">checkbox4
            <br>
            <input type="checkbox" name="checkbox[]" value="checkbox5">checkbox5
            <br>
            <br><br>
            <!-- <input type="reset" name="reset" <br><br> -->
            <input type="submit" value="Submit" name="submit">
            </center>
        </form>

    </body>

    </html>