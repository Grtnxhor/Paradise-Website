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

            //performing database query
            $sql = mysqli_query( $connection,"INSERT INTO newsletter(`Email`)
                VALUES('$_POST[email]')");
            if (!$sql) {
    die("Database query Failed: " . mysqli_error());
}else {
   header('location: index.html');
}
 mysqli_close($connection);
?>
