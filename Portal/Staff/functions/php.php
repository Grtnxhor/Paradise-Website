<?
/************validaton functions***************/

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

		$sql = "DELETE FROM `students` WHERE `Admin No.` = '".escape($admission)."' AND `active` = 0";
	$result = query($sql);
	confirm($result);

}
}