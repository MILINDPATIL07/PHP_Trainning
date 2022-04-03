<?php

include 'dbconnect.php';

$qry="SELECT * FROM emp";

$rs=mysqli_query($conn,$qry);
 session_start();
   
    //  if (!isset($_SESSION['email'])) {
    //      # code...
    //       header("location:login.php");
    //       exit();
    //   }

?>

<!DOCTYPE html>
<html>
<head>
	<title>View User</title>
</head>
<body>
<table border="1" width="100%">
	<td>Id</td>
	<td>Name</td>
	<td>Email</td>
	<td>Address</td>
	<td>Mobile</td>
	<td>Password</td>
	<td>Designation</td>
	<td>Gender</td>
	<td>Files</td>
	<td>EDIT</td>
	<td>DELETE</td>
	<td>AJEX DELETE</td>
	<?php

		if(mysqli_num_rows($rs)>0)
		{
			echo "true..";
			while ($row=mysqli_fetch_assoc($rs)) {
				# code...
	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['fname']?> <?php echo $row['lname']?></td>
		
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['address']?></td>
		<td><?php echo $row['mobile']?></td>
		<td><?php echo $row['password']?></td>
		<td><?php echo $row['designation']?></td>
		<td><?php echo $row['gender']?></td>
		<td><a href="upload/<?php echo $row['file'];?>"> <?php echo $row['file'];?></td>
		<!-- <td><a href="upload/<?php echo $row['file'];?>"> resume</td> -->
		<td><a href="editjs.php?id=<?php echo $row['id']; ?>"  title="Edit">EDIT</a></td>
		<td><a href="delete.php?id=<?php echo $row['id']; ?>"  title="delete">Delete</a></td>
		<!-- delete with ajax  -->
		<td><a onclick="deletere(<?php echo $row['id']; ?>)"  title="delete" >ADelete</a></td>

	</tr>
	<?php
		}
	}
	else
	{
		echo "0 row found...";
	}
	?>
</table>
<center><h1><a href="jsform.php">New Regitration</a></h1>
		<h3><a href="logout.php"> Logout</a></h3>
</center>

<?php
$thelist = "";
  if ($handle = opendir('upload')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<li><p>Download file <a href="download.php?file=' . $file . '">'.$file.'</a></p></li>';
        $thelist .= '<li><p>Delete file <a href="deletefile.php?file=' . $file . '">'.$file.'</a></p></li>';
        $thelist .= '<p>***********************************************';
      }
    }
    closedir($handle);
  }
?>
<h1>List of files:</h1>
<ul><?php echo $thelist; ?></ul>



<script>
	// form delte with ajax
function deletere(id) {
	//  alert(id)
  if (id.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText==1)
        { 
			// alert("Hello! I am an alert box!!");
           
			alert("Record Deleted Suceesfully ");
            setInterval('window.location.reload()',400);
			
			 //document.getElementById("txtHint").innerHTML = "Record deleted successfully";
        }
        else
        {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }

      }
    };
    xmlhttp.open("GET", "delete.php?id=" + id, true);
    xmlhttp.send();
  }
}
</script>

</body>
</html>