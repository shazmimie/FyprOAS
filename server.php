<?php 
include 'selectDB.php';
	session_start();

	// variable declaration
	$U_id = "";
	$role    = "";
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
			$query = "INSERT INTO user (U_id, U_name, U_password, role) 
					  VALUES('$U_id', '$U_name', '$U_password','$role')";
					  


			if (mysqli_query($link, $query))
			 {
				$_SESSION['U_id'] = $U_id;
				$_SESSION['role'] = $role;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
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

	if (isset($_POST['reg_svtitle'])) {
		// receive all input values from the form
		$L_name = mysqli_real_escape_string($link, $_POST['L_name']);
		$A_title = mysqli_real_escape_string($link, $_POST['A_title']);
		$A_objective = mysqli_real_escape_string($link, $_POST['A_objective']);
		$A_problemstatement = mysqli_real_escape_string($link, $_POST['A_problemstatement']);
		$A_scope = mysqli_real_escape_string($link, $_POST['A_scope']);
		$A_field = mysqli_real_escape_string($link, $_POST['A_field']);
		$A_software = mysqli_real_escape_string($link, $_POST['A_software']);
		$A_tools = mysqli_real_escape_string($link, $_POST['A_tools']);
		$A_technique = mysqli_real_escape_string($link, $_POST['A_technique']);
	
		// form validation: ensure that the form is correctly filled
		if (empty($L_name)) { array_push($errors, "FYP Supervisor is required"); }
		if (empty($A_title)) { array_push($errors, "FYP Title is required"); }
		if (empty($A_objective)) { array_push($errors, "Objectiveis required"); }
		if (empty($A_problemstatement)) { array_push($errors, "Problem Statement is required"); }
		if (empty($A_scope)) { array_push($errors, "Scope is required"); }
		if (empty($A_field)) { array_push($errors, "Field is required"); }
		if (empty($A_software)) { array_push($errors, "Software is required"); }
		if (empty($A_tools)) { array_push($errors, "Tools is required"); }
		if (empty($A_technique)) { array_push($errors, "Technique is required"); }
		

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
	
			$query2 = "INSERT INTO application (L_name, A_title, A_objective, A_problemstatement, A_scope, A_field, A_software, A_tools, A_technique) 
					  VALUES('$L_name', '$A_title', '$A_objective', '$A_problemstatement', '$A_scope', '$A_field', '$A_software', '$A_tools','$A_technique')";
					  $result2 = $conn->query($query2);
	if($result2)
	{
		$query3 = "SELECT * FROM application where U_id = '$U_id' ";
		$result3 = $conn->query($query3);
		if (mysqli_num_rows($result3)){
			while($row = mysqli_fetch_assoc($result3)){
				$A_idnumber = $row['A_idnumber'];
				$query4 = "INSERT INTO student (A_title) VALUES ('$A_title')";
				$result4 = $conn->query($query4);
				
					if($result4){
						echo "<script>alert('Submitted')</script>";
	  					echo "<script>window.location.href='dashboard.php'</script>";
	  				}
				}
			}
		}
	}
}





?>