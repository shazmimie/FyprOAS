<?php include 'constants.php';?>
<?php include('server.php') ?>



  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="/<?php echo ROOT?>/dashboard.php">FYPrOAS</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
 </button>
      <span style="color:white"></span>&nbsp;
    <span style="color:white"></span>
      <div class="dropdown-divider"></div>
         <a href="register.php">SignUp</a>
                <a href="login.php">SignIn</a>
            

            
               

  
     
  
  </nav>


<!DOCTYPE html>
<html>
<head>
	
	<title>FYPrOAS - Register New Account</title>
	
</head>
<body><br><br><br><br>
<center>
	<div class="header">
		<h2>Register</h2>
	</div>
	</center><br><br>
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
		
		<div class="input-group">
			<label>User ID</label>
			<input type="text" name="U_id" value="<?php echo $U_id ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email ?>">
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
		Role:&nbsp;<input type="radio" name="role" value="<?php echo STUDENT?>">Student
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

	<footer class="w3-container w3-padding-16 w3-grey">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © FYPrOAS 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  </div>
</body>
</html>
