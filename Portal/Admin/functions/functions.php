<?php

/*************helper functions***************/

function clean($string) {

	return htmlentities($string);
}

function redirect($location) {

	return header("Location: {$location}");
}

function set_message($message) {

	if(!empty($message)) {

		$_SESSION['message'] = $message;

		}else {

			$message = "";
		}
}



function display_message() {

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function token_generator() {

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token; 
}

function validation_errors($error_message) {

$error_message = <<<DELIMITER

<div class="alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}

function username_exist($username) {

	$sql = "SELECT id FROM users WHERE username = '$username'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}


function email_exist($email) {

	$sql = "SELECT * FROM students WHERE email = '$email'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}

function newsletter($email) {

	$sql = "SELECT * FROM students WHERE email = '$email'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}

function send_email($email, $subject, $msg, $headers) {

	return mail($email, $subject, $msg, $headers);
}

/*****************resize image**********/
function resizeImage($resourceType,$image_width,$image_height) {

	$resizeWidth = 100;
	$resizeHeight = 100;
	$imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
	imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight,$image_width,$image_height);
	return $imageLayer;
}

/************validaton functions***************/

function validate_user_registration() {

	$errors = [];

	$min = 3;
	$max = 20;

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$first_name     	 = clean($_POST['Fname']);
		$middle_name       	 = clean($_POST['Mname']);
		$last_name    		 = clean($_POST['Lname']);
		$password       	 = clean($_POST['Pword']);
		$confirm_password    = clean($_POST['Paword']);
		$date_of_birth	     = clean($_POST['Dateofbirth']);
		$gender			     = clean($_POST['Gender']);
		$email	     		 = clean($_POST['Email']);
		$address_1		     = clean($_POST['Add1']);
		$address_2		     = clean($_POST['Add2']);
		$telphone		     = clean($_POST['Tel']);
		$admission_date		 = clean($_POST['Addate']);
		$class	 			 = clean($_POST['Class']);
		$classAd 			 = clean($_POST['classAd']);
		$gen 				 = clean($_POST['Gen']);
		


		

		if(email_exist($email)) {

			$errors[] = "sorry that email is already taken";
		}

		if($password != $confirm_password) {

			$errors[] = "password doesn`t match";
		}

		
		
		if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

		} else {

			if(register_user($first_name, $middle_name, $last_name, $password, $date_of_birth, $gender, $email, $address_1, $address_2, $telphone, $admission_date, $class, $classAd, $gen)) {

				redirect("register.php");

							} else {

								
				redirect("register.php");
							}

		}


	} // post request

} // function

/*************register users***************/

function register_user($first_name, $middle_name, $last_name, $password, $date_of_birth, $gender, $email,  $address_1, $address_2, $telphone, $admission_date, $class, $classAd, $gen) {

	$first_name  			= escape($first_name);
	$middle_name    		= escape($middle_name);
	$last_name    			= escape($last_name );
	$password       		= escape($password);
	$date_of_birth			= escape($date_of_birth);
	$gender       			= escape($gender);
	$email     				= escape($email);
	$address_1				= escape($address_1);
	$address_2      		= escape($address_2);
	$telphone    			= escape($telphone);
	$admission_date			= escape($admission_date);
	$class					= escape($class);
	$classAd				= escape($classAd);
	$gen					= escape($gen);
	

	if(email_exist($email)) {

		return false;

	
}
 if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/passport/";
 

$resourceType = imagecreatefromjpeg($file);
$imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);

 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
     
		$sql = "INSERT INTO students(`First Name`, `Middle Name`,`Last Name`, `Password`, `Date of Birth`,`Gender`, `Email`, `Address 1`, `Address 2`, `Telephone Number`, `Admission Date`,`active`,`Class`, `Class Admitted`, `Department`, `Passport`)";
	$sql.= " VALUES('$first_name','$middle_name','$last_name','$password','$date_of_birth','$gender', '$email','$address_1','$address_2','$telphone','$admission_date','0','$class','$classAd','$gen','$final_file')";
	$result = query($sql);
	confirm($result);

}
}
}


/************validaton of staff functions***************/

function validate_staff_registration() {

	$errors = [];

	$min = 3;
	$max = 20;

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$fname     	 		 = clean($_POST['Finame']);
		$lname    			 = clean($_POST['Liname']);
		$password       	 = clean($_POST['Paword']);
		$confirm_password    = clean($_POST['Password']);
		$date_employed	     = clean($_POST['Dateemp']);
		$gender			     = clean($_POST['Gend']);
		$email	     		 = clean($_POST['mail']);
		$address_1		     = clean($_POST['Addl1']);
		$address_2		     = clean($_POST['Addl2']);
		$telphone		     = clean($_POST['Tele']);
		$level				 = clean($_POST['lev']);
		$class	 			 = clean($_POST['klas']);
		$subject			 = clean($_POST['sub']);
		


		

		if(email_exist($email)) {

			$errors[] = "sorry that email is already taken";
		}

		if($password != $confirm_password) {

			$errors[] = "password doesn`t match";
		}

		
		
		if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

		} else {

			if(register_staff($fname, $lname, $password, $confirm_password, $date_employed, $gender, $email, $address_1,	$address_2,	$telphone, $level, $class, $subject)) {		

				redirect("regstaff.php");

							} else {

								
				redirect("regstaff.php");
							}

		}


	} // post request

} // function

/*************register staff***************/

function register_staff($fname, $lname, $password, $confirm_password, $date_employed, $gender, $email, $address_1,	$address_2,	$telphone, $level, $class, $subject) {

	$fname  				= escape($fname);
	$lname    				= escape($lname);
	$password    			= escape($password);
	$confirm_password       = escape($confirm_password);
	$date_employed			= escape($date_employed);
	$gender       			= escape($gender);
	$email     				= escape($email);
	$address_1				= escape($address_1);
	$address_2      		= escape($address_2);
	$telphone    			= escape($telphone);
	$level					= escape($level);
	$class					= escape($class);
	$subject				= escape($subject);
	

	if(email_exist($email)) {

		return false;

	
} else {

		$sql = "INSERT INTO staff_login(`Password`,`First Name`, `Last Name`, `Class Supervised`,`Level`, `Subject Taught`, `Email`, `Address 1`, `Address 2`, `Tel`,`Date Employed`,`Gender`, `active`)";
	$sql.= " VALUES('$password','$fname','$lname','$class','$level','$subject','$email','$address_1','$address_2','$telphone','$date_employed', '$gender','0')";
	$result = query($sql);
	confirm($result);

}
}


/************validaton delete user functions***************/

function validate_delete_user() {

	$errors = [];

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$adm		 = clean($_POST['adm']);
	
		if(empty($adm)) {

				$errors[] = "Admission No cannot be empty";
			}
			
		if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

		} else {

			if(delete_user($adm)) {

				redirect("delete.php");

							} else {

								
				redirect("delete.php");
							}

		}


	} // post request

} // function

/*************delete users***************/

function delete_user($adm) {

	$adm			= escape($adm);
		

	if(empty($adm)) {

		return false;

	
} else {

		$sql = "DELETE FROM `students` WHERE `Admission No.` = '".escape($adm)."' AND `active` = 0";
	$result = query($sql);
	confirm($result);

}
}


/*******************delete staff database******************/

function validate_delete_staff() {

	$errors = [];

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$adm		 = clean($_POST['adm']);
	
		if(empty($adm)) {

				$errors[] = "Employee ID cannot be empty";
			}
			
		if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

		} else {

			if(delete_staff($adm)) {

				redirect("delstaff.php");

							} else {

								
				redirect("delstaff.php");
							}

		}


	} // post request

} // function

/*************delete staff***************/

function delete_staff($adm) {

	$adm			= escape($adm);
		

	if(empty($adm)) {

		return false;

	
} else {

		$sql = "DELETE FROM `staff_login` WHERE `Employee_ID` = '".escape($adm)."' AND `active` = 0";
	$result = query($sql);
	confirm($result);

}
}

/*************Activate user functions***************/

function activate_user() {

	if($_SERVER['REQUEST_METHOD'] == "GET") {

		if(isset($_GET['email'])) {

			echo $email = clean($_GET['email']);
			echo $validation_code = clean($_GET['code']);

			$sql = "SELECT id FROM users WHERE email = '".escape($_GET['email'])."' AND validation_code = '".escape($_GET['code'])."' ";
			$result = query($sql);
			confirm($result);

			if(row_count($result) == 1) {

				$sql2 = "UPDATE users SET active = 1, validation_code = 0 WHERE email = '".escape($email)."' AND validation_code = '".escape($validation_code)."' ";
				$result2 = query($sql2);
			confirm($result2);

			set_message("<p class='bg-success'>Activated</p>");

			redirect("login.php");
		} else {
			set_message("<p class='bg-danger'>unActivated</p>");

			redirect("login.php");
		}
		}
	}
} //function



/************************validate Admin login functions**********/

function validate_Admin_login() {

	$errors = [];

	

	if($_SERVER['REQUEST_METHOD'] == "POST") {

			$admin      	 = clean($_POST['admin']);
			$password   	 = clean($_POST['password']);



			if(empty($admin)) {

				$errors[] = "Admin No. cannot be empty";
			}


			if(empty($password)) {

				$errors[] = "password cannot be empty";
			}


			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validation_errors($error); 

				}

			} else {

				if(login_admin($admin, $password)) {

					redirect("Admin.php");

				} else {

					echo validation_errors("invalid login");
				}
			} 

		}

} //function


/************************ user login functions**********/

function login_admin($admin, $password) {

$sql = "SELECT `Password` FROM `admin` WHERE `Admin No.` = '".escape($admin)."' AND `active` = 0";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$admin_password = $row['Password'];

	if($password == $admin_password) {

		$_SESSION['Admin No.'] = $admin;

		return true;
	} else {
		return false;
	}

	return true;
} else {

	return false;
}

} //end of function     

       


?> 
