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

// This function will run within each post array including multi-dimensional arrays 
function ExtendedAddslash(&$params)
{ 
        foreach ($params as &$var) {
            // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
        }
}
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

     // Initialize ExtendedAddslash() function for every $_POST variable
    ExtendedAddslash($_POST);  

// search submission ID

$query = "SELECT * FROM `message_us` WHERE `Email` = '$Email'";


if ($query == $Email) {
 
    mysqli_query("UPDATE `message_us` SET 
                                `Name` = '$Name',
                                `Subject` = '$Subject',
                                `Message` = '$Message'        
                             WHERE `Email` = '$Email'") 
     or die(mysql_error());
    
} else {

 

            //performing database query
            $sql = mysqli_query( $connection,"INSERT INTO message_us(Name,Email,Subject,Message)
                VALUES('$Name','$Email','$Subject','$Message')");

}
            if (!$sql) {
    die("Database query Failed: " . mysqli_error());
}else {
    header('location: index.html');
}
 mysqli_close($connection);
?>
