<?php include 'constants.php';?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>FYPrOAS - Register New Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		
		<div class="input-group">
			<label>User ID</label>
			<input type="text" name="U_id" value="<?php echo $U_id ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div>
		<td>
		Role:&nbsp;<input type="radio" name="role" value="<?php echo COORDINATOR?>">Coordinator
		<input type="radio" name="role" value="<?php echo STUDENT?>">Student
		<input type="radio" name="role" value="<?php echo LECTURER?>">Lecturer
		</td>	
 </div>

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>