<?php
include 'dbconnect.php';
$qry = "SELECT * FROM emp";
$rs = mysqli_query($conn, $qry);
session_start();

if (!isset($_SESSION['email'])) {
    # code...
    header("location:login.php");
    exit();
}
?>
<script>
    // form delete with ajax

    function deletere(id) {
        //  alert(id)
        if (confirm('Are you sure you want to delete this')) {
            if (id.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if (this.responseText == 1) {
                            // confirm("are you sure you want to delete");
                            //windows.alert("Hello! I am an alert box!!");
                            //alert("Record Deleted Suceesfully ");
                            setInterval('window.location.reload()', 4000);
                            //document.getElementById("txtHint").innerHTML = "Record deleted successfully";
                        } else {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    }
                };
                xmlhttp.open("GET", "delete.php?id=" + id, true);
                xmlhttp.send();
            }
        }
    }
</script>


<!DOCTYPE html>
<html>

<head>
    <title>View User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid my-4">
        <p><span id="txtHint"></span></p>
        <center>
            <table class="table table-striped w-auto">
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>MOBILE</th>
                <!-- <th>PASSWORD</th> -->
                <th>DESIGNATION</th>
                <th>GENDER</th>
                <th>FILES</th>
                <th>EDIT</th>
                <th>DELETE</th>
                <th>AJAX DELETE</th>
                <?php
                if (mysqli_num_rows($rs) > 0) {
                    //echo "true..";
                    while ($row = mysqli_fetch_assoc($rs)) {
                        # code...
                ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['mobile'] ?></td>
                            <!-- <td><?php echo $row['password'] ?></td> -->
                            <td><?php echo $row['designation'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><a href="upload/<?php echo $row['file']; ?>"> <?php echo $row['file']; ?></td>
                            <!-- <td><a href="upload/<?php echo $row['file']; ?>"> resume</td> -->
                            <td><a href="editjs.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" title="Edit">EDIT</a>
                            </td>
                            <!-- <td><a href="delete.php?id=</?php echo $row['id']; ?>"  title="delete">Delete</a></td> -->
                            <td><a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger" title="delete">Delete</a></td>
                            <!-- delete with ajax  -->
                            <td><a href="" onclick="deletere(<?php echo $row['id']; ?>)" class="btn btn-success" title="delete">ADelete</a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "0 row found...";
                }
                ?>
            </table>
        </center>
        <center>
            <h1><a href="jsform.php" class="btn btn-primary">New Regitration</a></h1>
            <h3><a href="logout.php" class="btn btn-danger"> Logout</a></h3>
        </center>
        <?php
        // $thelist = "";
        // if ($handle = opendir('upload')) {
        // 	while (false !== ($file = readdir($handle))) {
        // 		if ($file != "." && $file != "..") {
        // 			$thelist .= '<li><p>Download file <a href="download.php?file=' . $file . '">' . $file . '</a></p></li>';
        // 			$thelist .= '<li><p>Delete file <a href="deletefile.php?file=' . $file . '">' . $file . '</a></p></li>';
        // 			$thelist .= '<p>***********************************************';
        // 		}
        // 	}
        // 	closedir($handle);
        // }
        ?>
        <!-- <h1>List of files:</h1>
    <ul></?php echo $thelist; ?></ul> -->
    </div>

</body>

</html>