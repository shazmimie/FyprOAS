
  <!-- Breadcrumbs-->
 
<?php include 'header.php';?>
 <!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<div class="container">

  <center>
<br><br><br><br><br><br><br><br><br><br><h2>Student List:</h2><br><br><br><br>
   

<h1 align="center"><font size = "6"> 
	 <?php if (IsInRole('Coordinator')) { ?>
<button class="button button3" formaction="allStudentList.php"><a href="allStudentList.php"><h4>All Students</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<button class="button button3" formaction="pta1.php"><a href="pta1.php"><h4>PTA 1</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<button class="button button3" formaction="pta2.php"><a href="pta2.php"><h4>PTA 2</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>
	
<button class="button button3" formaction="fyp1.php"><a href="fyp1.php"><h4>FYP 1</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<button class="button button3" formaction="fyp2.php"><a href="fyp2.php"><h4>FYP 2</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<?php }?>


	</font> </h1></center>
	


</div>
</head>

</html>
<?php include 'footer.php';?>