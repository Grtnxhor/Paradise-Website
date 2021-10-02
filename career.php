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



$FName = $_POST['FirstName'];
$LName = $_POST['LastName'];
$Email = $_POST['Email'];
$Tel = $_POST['Tel'];
$position = $_POST['position'];
$cover = $_POST['cover'];

if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="Portal/Admin/wow/";
 

 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  
  
     
            //performing database query
            $sql = mysqli_query( $connection,"INSERT INTO workwithus(`First Name`,`Last Name`,`Email`,`Telephone`,`position`,`cover letter`,`cv`)
                VALUES('$FName','$LName','$Email','$Tel','$position','$cover','$final_file')");


            if (!$sql) {
    die("Database Selection Failed: " . mysqli_error($connection));
}else {
    header('location: career.html');
}
 mysqli_close($connection);
 ?>
  <script>
  alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
  <?php
 }
}
?>