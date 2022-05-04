<?php

class insterdata 
{
    public function insertdata($data,$tableB,$tableA,$col)
    {
        require("dbconnect.php");
        // $sql = "INSERT INTO $tableA VALUES ('','$data')";
        $sql = "INSERT INTO $tableA VALUES (NULL,'$data')";
        //echo $sql; exit;

        $sql2 = "DELETE from $tableB where $col = '$data'";
        $data1 = mysqli_query($conn, $sql);
        echo "table data inserted" . "<br>";
        echo "<br>";
        $data2 = mysqli_query($conn, $sql2);
        echo "table data Deleted";

        // $query = "SELECT * FROM table1 ORDER BY checkbox1 ASC";
        // $data = mysqli_query($conn, $query);
        // $total = mysqli_num_rows($data);

        // $query1 = "SELECT * FROM table2 ORDER BY checkbox2 ASC";
        // $data1 = mysqli_query($conn, $query1);
        // $total1 = mysqli_num_rows($data1);
        
    }

    public function getdata($tableA,$tableB)
    {
        require("dbconnect.php");
        $query = "SELECT * FROM $tableA ORDER BY checkbox1 ASC";
        $data = mysqli_query($conn, $query);
        $total['total1'] = mysqli_num_rows($data);
        $total['data'] = $data;
        
        $query1 = "SELECT * FROM $tableB ORDER BY checkbox2 ASC";
        $data1 = mysqli_query($conn, $query1);
        $total['data1'] = $data1;
        $total['total2'] = mysqli_num_rows($data1);
        return $total;

    }
 }


// $a= "hello";
// echo $a;

//InsertIntoTable($sql);
?>
