<?php
session_start();

if (isset($_COOKIE['user'])) {
    # code...
    $un = $_COOKIE['user'];
} else {
    $un = "";
}
if (isset($_COOKIE['pass'])) {
    # code...
    $ps = $_COOKIE['pass'];
} else {
    $ps = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

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
    <!-- <link rel="stylesheet" href="CSS/allcss.css" type="text/css"> -->

    <style>
        .abc {
            box-shadow: 0px 0px 30px;
            margin-top: 30px;
            margin-bottom: 30px;
            border-radius: 5px;
        }

        .pad {
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
        }
    </style>
</head>


<body style="background-color:aquawhite;">

    <form action="checklogin.php" method="POST">


        <div class="row" id="background">
            <div class="abc col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-6 col-xs-12" id="border">
                <h2 class="text-center" style="border-bottom: solid 3px; font-weight: bold"><i class=""></i> Employee
                    Login</h2>
                <!-- Email input -->
                <div class="form-outline mb-4 pad">
                    <label class="form-label">User Name</label>
                    <input type="email" name="email" Placeholder="Enter UserName" class="form-control" value="<?php echo $un; ?>" required />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4 pad">
                    <label class="form-label">Password</label>
                    <input type="password" id="myInput" name="password" class="form-control" placeholder="Password" value="<?php echo $ps; ?>" required />
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4 pad">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check text-center" style="margin: 0 0 10px 0">

                            <label><input type="checkbox" onclick="myFunction()">Show Password</label><br>
                            <input class="form-check-input" type="checkbox" value="1" name="remember" />
                            <label class="form-check-label"> Remember me </label>
                        </div>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" name="btn_sb" class="btn btn-primary btn-block mb-4" style="margin: 0 0 10px 0">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="jsform.php">Register</a></p>
                </div>
            </div>

        </div>

    </form>







    <?php
    if (isset($_POST['msg'])) {
        # code...
        $msg = $_POST['msg'];
    ?>
        <h3 style="color:red;text-align: center;"><?php echo "<script>alert('$msg')</script>"; ?></h3>
    <?php
    } else {
        $msg = "";
    }
    ?>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>