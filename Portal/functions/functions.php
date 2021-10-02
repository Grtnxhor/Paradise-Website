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



/***************Validate update password********************/
function validate_update_password() {

$errors = [];

if($_SERVER['REQUEST_METHOD'] == "POST") {

$adm 			= clean($_POST['adm']);
$old 			= clean($_POST['old']);
$new	 		= clean($_POST['new']);
$conf    		= clean($_POST['conf']);

if($new != $conf) {

			$errors[] = "Password doesn`t match";
		}

		if(!empty($errors)) {

			foreach ($errors as $error) {
		
                echo validation_errors($error); 

			}

		} else {

			if(login_admin($adm, $old, $new, $conf)) {

				redirect("change.php");

							} else {

								
				redirect("change.php");
							}

		}


	} // post request

} // function

/******************************update***************/

function login_admin($adm, $old, $new, $conf) {

	$adm 				= escape($adm);
	$old    			= escape($old);
	$new   				= escape($new);
	$conf   			= escape($conf);

$sql = "UPDATE `students` SET      
                                `Password` = '$conf',
                                   
                             WHERE `Admission No.` = '$adm'" ;
$result = query($sql);

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

/************************validate user login functions**********/

function validate_user_login() {

	$errors = [];

	

	if($_SERVER['REQUEST_METHOD'] == "POST") {

			$admission       = clean($_POST['admission']);
			$password   	 = clean($_POST['password']);



			if(empty($admission)) {

				$errors[] = "Admission No. cannot be empty";
			}


			if(empty($password)) {

				$errors[] = "password cannot be empty";
			}


			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validation_errors($error); 

				}

			} else {

				if(login_user($admission, $password)) {

					redirect("index.php");

				} else {

					echo validation_errors("invalid login");
				}
			} 

		}

} //function


/************************ user login functions**********/

function login_user($admission, $password) {

$sql = "SELECT `Password` FROM `students` WHERE `Admission No.` = '".escape($admission)."' AND `active` = 0";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$user_password = $row['Password'];

	if($password == $user_password) {

		$_SESSION['Admission No.'] = $admission;

		return true;
	} else {
		return false;
	}

	return true;
} else {

	return false;
}

} //end of function 

/**********************logged in***************/

function logged_in() {
$sql = "SELECT * FROM students WHERE `Admission No.` = '".$_SESSION["Admission No."]."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
echo $row["Last Name"];
return true;
		} 
	}

/*******************logged 2********************/
function logged_in2() {
$sql = "SELECT * FROM students WHERE `Admission No.` = '".$_SESSION["Admission No."]."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
echo $row["First Name"];
return true;
		} 
	}	

/********************welcome***********************/

function welcome() {
$sql = "SELECT * FROM students WHERE `Admission No.` = '".$_SESSION["Admission No."]."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
echo $row["First Name"]." ".$row["Last Name"];
return true;
		} 
	}		

/********************Admission No***********************/

function Admission() {
$sql = "SELECT * FROM students WHERE `Admission No.` = '".$_SESSION["Admission No."]."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
echo $row["Admission No."];
return true;
		} 
	}			

/*****************profile*****************/
function profile() {
$sql = "SELECT * FROM students WHERE `Admission No.` = '".$_SESSION["Admission No."]."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
echo $row["First Name"]." ".$row["Middle Name"]." ".$row["Last Name"];
return true;
		} 
	}			

?> 