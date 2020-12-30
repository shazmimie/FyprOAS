<?php 
include 'selectDB.php';
	session_start();

	// variable declaration
	$U_id = "";
	$role    = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
	
		$U_id = mysqli_real_escape_string($link, $_POST['U_id']);
		$password_1 = mysqli_real_escape_string($link, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($link, $_POST['password_2']);
		$role = mysqli_real_escape_string($link, $_POST['role']);
	
		// form validation: ensure that the form is correctly filled
	
		if (empty($U_id)) { array_push($errors, "User ID is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($role)) { array_push($errors, "Role is required"); }
		

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		if ($U_id == "Coordinator") {
			echo $U_id;
			$role = COORDINATOR;
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$U_password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user (U_id, U_password, role) 
					  VALUES('$U_id', '$U_password','$role')";
					  
$result = mysqli_query($link, $query);

			if (mysqli_query($link, $query))
			 
			 	$role = $resul['role'];
				$_SESSION['U_id'] = $U_id;
				$_SESSION['role'] = $role;
				//$_SESSION['success'] = "You are now logged in";
				//header('location: updateStdProfile.php');

				$sql="SELECT * FROM user WHERE U_id='$U_id' and U_password='$U_password'";
$results = mysqli_query($link, $sql);
$resul=mysqli_query($sql);
if($role ==STUDENT){
 header('location: RegStd.php');
}

	else if ($role ==LECTURER){
  header('location: login.php');
			} else {
				array_push($errors, 'Registration Error: ' . mysqli_error($link));
			}
		}
	}




		 

	

	// ... 
	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$U_id = mysqli_real_escape_string($link, $_POST['U_id']);
		$U_password = mysqli_real_escape_string($link, $_POST['U_password']);
		if (empty($U_id)) {
			array_push($errors, "User ID is required");
		}
		if (empty($U_password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$U_password = md5($U_password);
			$query = "SELECT * FROM user WHERE U_id='$U_id' AND U_password='$U_password'  ";
			$results = mysqli_query($link, $query);

			if (mysqli_num_rows($results) == 1) {

				$row = mysqli_fetch_assoc($results);
				$_SESSION['U_id'] = $row['U_id'];
				$_SESSION['role'] = $row['role'];
				$_SESSION['success'] = "Welcome";
				$_SESSION['U_num'] = $row['U_num'];
				
				header('location: index.php');
			} else {
				array_push($errors, "Wrong username/password combination");
			}	
		}
	}
	


	// ...
	// REGISTER SV AND FYP TITLE

	



?>