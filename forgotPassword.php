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
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><br><br><br><br>
<center>
	<div class="header">
		<h2>Forgot Password</h2>
	</div>
	</center><br><br>
	<form method="post" action="forgotPassword.php">
		<center><p><h3>Recover Your Password</h3></p></center>
<center><p>Please enter your email address you used to sign up on this site and we will assist you in recovering your password.</p>
		<?php include('errors.php'); ?>

		<div class="input-group">
			
			<input type="email" name="email" >
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="forgot_password">Recover your password</button>
		</div>
		
	</center>	
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