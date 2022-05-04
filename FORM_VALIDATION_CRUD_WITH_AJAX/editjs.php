<?php
   require 'dbconnect.php';
   session_start();
   

   if (!isset($_SESSION['email'])) {
       # code...
       header("location:login.php");
       exit();
   }


   $id=$_GET['id'];
   //echo"$id"; 
   $qry="SELECT * FROM emp WHERE id=$id";
   //echo"$qry";
   $rs=mysqli_query($conn,$qry);
   $row=mysqli_fetch_assoc($rs);
   //var_dump($row);
  
if(isset($_SESSION['error_message']))
{
	echo "<pre>";
	print_r($_SESSION['error_message']);
	echo "</pre>";
	$_SESSION['error_message']="";
}

if(isset($_SESSION['error_email_message']))
{
	echo ($_SESSION['error_email_message']);
	$_SESSION['error_email_message']="";
}
?>
<html>

<head>
    <title>Bootstrap Form Demo</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- <link href="bootstrap/bootstrap.css" type="text/css" rel="stylesheet" /> -->
    <!-- online link BS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--CDN LINK OF JQUERY PARENT PLUG IN - COMPULSORY TO BE HERE. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="JS/alljavascript.js"> </script>
    <!-- REGISTRATION PAGE CSS -->
    <link rel="stylesheet" href="CSS/allcss.css" type="text/css">   

</head>

<body>
    <form name="register" action="update.php" method="POST" enctype="multipart/form-data">
        <div id="Home" class="fullscreen_bg">
            <video src="Video/Space - 5200.mp4 " autoplay loop muted class="fullscreen_bg_video"></video>
           
                <div class="row " id="background">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="abc col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-6 col-xs-12"
                id="border">
                        <h2 id="hh" class="text-center" style="border-bottom: solid 1px; color:white"><i class="fa fa-user-plus"></i> Edit From Details </h2></br>
                      
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?=$_GET['id'] ?>">
                            <b>First Name</b>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input id="fn" type="text" name="name" placeholder="Enter Your First Name" maxlength="20"
                                    class="form-control" value="<?php echo $row['fname']?>" />
                            </div>
                            <small id="fnValidation" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <b>Last Name</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input id="ln" type="text" name="name1" placeholder="Enter Your Last Name "
                                    maxlength="20" class="form-control" value="<?php echo $row['lname']?>" />
                            </div>
                            <small id="lnValidation" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <b>Address</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <textarea name="Address" class="form-control"
                                    required><?php echo $row['address']?></textarea>
                            </div>
                            <small id="lnValidation" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <b>Gender</b>
                            <div class="input-group form-control ">
                                <span class="input-group-addon"><i class="fa fa-female"></i> | <i
                                        class="fa fa-male"></i></span>

                                <input type="radio" name="gender" value="female"
                                    <?php echo $row['gender']=="female"?"checked=checked":""; ?> >Female

                                <input type="radio" name="gender" value="male"
                                    <?php echo $row['gender']=="male"?"checked=checked":""; ?> >Male

                                <!-- <small id="lnValidation" class="text-danger"></small> -->
                            </div>
                        </div>

                        <div class="form-group">
                            <b><i class="fa fa-phone"></i> Contact No.</b>
                            <div class="input-group">
                                <span class="input-group-addon">+91</span>
                                <input id="cn" type="text" name="MobileNo" placeholder="Enter Your contact no. "
                                    maxlength="10" class="form-control" value="<?php echo $row['mobile']?>" />
                            </div>
                            <small id="cnValidation" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <b><i class="fa fa-phone"></i> Designation</b>
                            <div class="input-group">
                                <select name="designation" class="form-control" id="designation" autoplay>
                                    <option class="form-control"></option>

                                    <option value="Jr.Software Devloper"
                                        <?php echo $row['designation']=="Jr.Software Devloper"?"selected=selected":""; ?>
                                        class="form-control">Jr.Software Devloper</option>

                                    <option value="Sr.Software Devloper"
                                        <?php echo $row['designation']=="Sr.Software Devloper"?"selected=selected":""; ?>
                                        class="form-control">Sr.Software Devloper</option>

                                    <option value="Project Manager"
                                        <?php echo $row['designation']=="Project Manager"?"selected=selected":""; ?>
                                        class="form-control">Project Manager </option>

                                    <option value="Business Analyst"
                                        <?php echo $row['designation']=="Business Analyst"?"selected=selected":""; ?>
                                        class="form-control"> Business Analyst</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <b>Email</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input id="ei" type="text" name="email" placeholder="Enter Your email id "
                                    maxlength="50" class="form-control" value="<?php echo $row['email']?>" />
                            </div>
                            <small id="eiValidation" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <b>Password</b>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input id="TxtPassword" name="password" type="password"
                                    placeholder="Enter Your password" maxlength="12" class="form-control"
                                    value="<?php echo $row['password']?>" />
                            </div>
                            <small id="TxtPasswordValidation" class="text-danger"></small>
                        </div>

                         <div class="form-group">
						<b>Confirm Password</b>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input id="TxtPassword" name="cpass" type="password" placeholder="Enter Your password" maxlength="12" class="form-control" />
						</div>
						<small id="TxtPasswordValidation" class="text-danger"></small>
					</div> 

                        <div class="form-group"> -->
                            <b>Choose File To Upload</b>
                            <label style="color:red;font-size:10px;">( * Note: ONLY XLSX,PDF,DOCX,TXT FILE FORMAT
                        ALLOW.)</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="file" name="fileToUpload" class="form-control"
                                    value="<?php echo $row['file']?>" />
                                <div id=""></div>
                            </div>
                            <small id="" class="text-danger"></small>
                        </div>


                        <div class="form-group">

                            <input class="btn btn-success" type="submit" name="btn_sb" value="Update">
                        </div>
                    </div>
                </div>
            </div>
    </form>
</body>
</html>