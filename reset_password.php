<?php include('server.php') ?>
<body id="page-top">
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
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><br><br><br><br>
<center>
	<div class="header">
		<h2>Reset Password</h2>
	</div>
	</center><br><br>
	<form method="post" action="reset_password.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reset_password">Reset Password</button>
		</div>
		
		
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
</body>
</html>