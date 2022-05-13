<?php
session_start();
if (isset($_SESSION['email'])) {
    # code...
    header("location:login.php");
    exit();
}

if (isset($_SESSION['error_message'])) {
    echo "<pre>";
    print_r($_SESSION['error_message']);
    echo "</pre>";
    $_SESSION['error_message'] = "";
}
// if (isset($_SESSION['error_email_message'])) {
//     echo ($_SESSION['error_email_message']);
//      $_SESSION['error_email_message'] = "";
// }
?>
<html>

<head>
    <title>Bootstrap Form Demo</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- <link href="bootstrap/bootstrap.css" type="text/css" rel="stylesheet" /> -->
    <!-- online link BS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--CDN LINK OF JQUERY PARENT PLUG IN - COMPULSORY TO BE HERE. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <!-- JAVASCRIPT VALIDATION -->
    <script type="text/javascript" src="JS/alljavascript.js"> </script>
    <!-- REGISTRATION PAGE CSS -->
    <link rel="stylesheet" href="CSS/allcss.css" type="text/css">

    <!-- <style type="text/css" src="CSS/allcss.css"> </style> -->
</head>

<body>
    <form name="register" action="process1.php" method="POST" enctype="multipart/form-data">
        <div id="bg">`
            <video src="Video/Space - 5200.mp4 " autoplay loop muted class="fullscreen_bg_video"></video>
        </div>
        <!-- <a href="login.php" class="fa fa-sign-in fa-4" style="color:white; position:relative; font-size:50px; position:fixed;"> LOGIN </a> -->
        <div class="row" id="background">
            <div class="abc col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-6 col-xs-12" id="border">
                <h2 id="Heading" class="text-center" style="border-bottom: solid 1px;"><i class=""></i> Create New
                    Account</h2>

                <div class="form-group">
                    <b>First Name</b>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input id="fn" type="text" name="name" placeholder="Enter Your First Name" maxlength="20" class="form-control" autofocus />
                    </div>
                    <small id="fnValidation" class="text-danger"></small>
                </div>

                <div class="form-group">
                    <b>Last Name</b>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input id="ln" type="text" name="name1" placeholder="Enter Your Last Name " maxlength="20" class="form-control" autofocus />
                    </div>
                    <small id="lnValidation" class="text-danger"></small>
                </div>
                <div class="form-group">
                    <b>Address</b>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input id="add" type="text" name="Address" placeholder="Enter Your address " maxlength="50" class="form-control" required autofocus />
                    </div>
                    <small id="addValidation" class="text-danger"></small>
                </div>
                <div class="form-group ">
                    <b>Gender</b>
                    <div class="input-group form-control" id="genderid">
                        <span class="input-group-addon"><i class="fa fa-female"></i> | <i class="fa fa-male"></i></span>
                        <input type="radio" name="gender" value="male" required checked>Male
                        <input type="radio" name="gender" value="female" required>Female
                    </div>
                </div>
                <div class="form-group">
                    <b><i class="fa fa-phone"></i> Contact No.</b>
                    <div class="input-group">
                        <span class="input-group-addon">+91</span>
                        <input id="cn" type="text" name="MobileNo" placeholder="Enter Your contact no." maxlength="10" class="form-control" autofocus required />
                    </div>
                    <small id="cnValidation" class="text-danger"></small>
                </div>
                <!-- ============================================================================================================================== -->
                <div class="form-group">
                    <b><i class="fa fa-phone"></i> Designation</b>
                    <div class="input-group form-control">
                        <select id="Designation" name="designation" class="form-control" autofocus required>
                            <option value="">Choose Designation</option>
                            <option value="Jr.Software Devloper">Jr.Software Devloper</option>
                            <option value="Sr.Software Devloper">Sr.Software Devloper</option>
                            <option value="Project Manager">Project Manager</option>
                            <option value="Business Analyst">Business Analyst</option>
                        </select>
                    </div>
                    <small id="DesignationValidation" class="text-danger"></small>
                </div>
                <!-- ================================================================================================================================ -->
                <div class="form-group">
                    <b>Email</b>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input id="ei" type="text" name="email" placeholder="Enter Your email id " maxlength="50" class="form-control" autofocus />
                    </div>
                    <small id="eiValidation" class="text-danger"></small>
                    <span style="color:red;text-align: center;">
                        <?php
                        if (isset($_REQUEST['email'])) {
                            # code...
                            $msg2 = $_REQUEST['email'];
                        ?>
                            <p> <?php echo $msg2; ?></p>
                        <?php
                        } else {
                            $msg2 = "";
                        }
                        ?>
                    </span>
                </div>

                <div class="form-group">
                    <b>Password</b>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input id="pass" name="password" type="password" placeholder="Enter Your password" maxlength="12" class="form-control" autofocus />
                    </div>
                    <small id="passValidation" class="text-danger"></small>
                </div>

                <div class="form-group">
                    <b>Confirm Password</b>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input id="cpass" name="cpassword" type="password" placeholder="Confirm Your password" maxlength="12" class="form-control" autofocus />
                    </div>
                    <small id="cpassValidation" class="text-danger"></small>
                    <span style="color:red;text-align: center;">
                        <?php
                        if (isset($_REQUEST['pass'])) {
                            # code...
                            $pass = $_REQUEST['pass'];
                        ?>
                            <p> <?php echo $pass; ?></p>
                        <?php
                        } else {
                            $pass = "";
                        }
                        ?>
                    </span>
                </div>

                <div class="form-group">
                    <b>Choose File To Upload</b>
                    <label style="color:red;font-size:10px;">( * Note: ONLY XLSX,PDF,DOCX,TXT FILE FORMAT
                        ALLOW.)</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" required autofocus/>
                        <!-- <div id=""></div> -->
                    </div>
                    <small id="fileToUploadValidation" class="text-danger"></small>
                </div>
                <div class="form-group">
                    <center> <input class="btn btn-danger" type="reset" style="color:white;">
                        <button class="btn btn-success" type="button" name="btn_sb" id="BtnSubmit">Submit</button>
                        <input type="button" value="Back" class="btn btn-primary"onclick="history.back()"/ >
                    </center>
                    <br>
                    <div class="text-center">
                    <p style="color:white;" >Already a member? <a href='login.php'>Login</a></p>
                </div>
                </div>
            </div>
        </div>

    </form>
</body>

</html>