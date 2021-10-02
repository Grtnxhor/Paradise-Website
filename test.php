<?php
//creating the database to use
$connection = mysqli_connect("localhost","root","paradise");
if (!$connection) {
    die("Database connection Failed: " . mysqli_error());
}

//selecting the database to use
$db_select = mysqli_select_db( $connection,"paradise school cms");
if (!$db_select) {
    die("Database Selection Failed: " . mysqli_error());
}
?>
<html>
    <head>
    <title> Basic</title>
        <body>
        <?php
            //performing database query
            $result = mysqli_query( $connection,"select * from student_bio ");
            if (!$result) {
    die("Database query Failed: " . mysqli_error());
}
    //using returned data
            while ($row = mysqli_fetch_array($result)) {
                echo $row["Admission No."]." ".$row["First Name"]." ".$row["Last Name"]." ".$row["passport"]."<br/>";
            }
            ?>