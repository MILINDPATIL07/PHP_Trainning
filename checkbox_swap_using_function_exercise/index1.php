<?php
require("dbconnect.php");
include("functions.php");
echo "<pre>";
print_r($_POST);
echo "</pre>";
//exit;
$calltoaction = new insterdata();
if (isset($_POST['submit'])) {
    foreach ($_POST['check'] as $key => $value) {

        $calltoaction->insertdata($value, 'table1', 'table2', 'checkbox1');
    }
}
if (isset($_POST['submit1'])) {
    foreach ($_POST['check'] as $key => $value) {

        $calltoaction->insertdata($value, 'table2', 'table1', 'checkbox2 ');
    }
}
    
    $totaldata = $calltoaction->getdata('table1','table2');
    echo "<pre>";
    print_r($totaldata);
    echo "</pre>";
    $data = $totaldata['data'];
    $data1 = $totaldata['data1'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Table Data</title>
</head>

<body>
    <form method="POST">
        <?php
        if ($totaldata['total1'] >= 0) {
        ?>
            <center>
                <h2>TABLE1 Records</h2>

            </center>
            <center>
                <table border="2" cellspacing="5" width="50%">
                    <tr>
                        <!-- <th width="03%">Id</th> -->
                        <th width="10%">Sample form checkboxes</th>
                    </tr>
            </center>
            <?php

            while ($result = mysqli_fetch_assoc($data)) {
            ?>
                <tr>
                    <!-- <td></?php echo $result['id1'] ?>
                        <input type="hidden" name="id1_</?php echo $result['id1'] ?>" value="</?php echo $result['id1'] ?>">
                    </td> -->
                    <td><?php echo $result['checkbox1'] ?>
                        <input type="checkbox" name="check[]" value="<?php echo $result['checkbox1'] ?>" />
                    </td>
                    <!-- <td>
                        <input type="text" name="formtextdata_<//?php echo $result['id1']?>"/>
                    </td> -->
                </tr>
        <?php
            }
        } else {
            echo "No record found..";
        }
        ?>

        <tr>
            <td colspan="3" style="text-align: center;">
                <input type="submit" value="Move To Table 2" name="submit">
            </td>
        </tr>
        </table>
    </form>

    <?php
    if ($totaldata['total1'] >= 0) {
    ?>
        <center>
            <h2>TABLE2 Records</h2>
        </center>
        <center>
            <table border="2" cellspacing="5" width="50%">
                <tr>
                    <!-- <th width="03%">Id</th> -->
                    <th width="10%">Sample form checkboxes</th>
                </tr>
        </center>
        <?php
        //$result = mysqli_fetch_assoc($data);
        //echo "<pre>";
        // print_r($result);
        // echo "</pre>";
        while ($result1 = mysqli_fetch_assoc($data1)) {
        ?>
            <tr>
                <!-- <td></?php echo $result1['id2'] ?>
                    <input type="hidden" name="id2_</?php echo $result1['id2'] ?>" value="</?php echo $result1['id2'] ?>">
                </td> -->
                <td><?php echo $result1['checkbox2'] ?>
                    <input type="checkbox" name="check[]" value="<?php echo $result1['checkbox2'] ?>" />
                </td>
                <!-- <td>
         <input type="text" name="formtextdata_<//?php echo $result1['id2']?>"/>
         </td> -->
            </tr>
    <?php
        }
    } else {
        echo "No record found..";
    }
    ?>
    <tr>
        <td colspan="3" style="text-align: center;">
            <input type="submit" value="Move To Table 1" name="submit1">
        </td>
    </tr>
    </table>

</body>

</html>