
  <!-- Breadcrumbs-->
 
<?php include 'header.php';?>
 <!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<div class="container">

  <center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<h1 align="center"><font size = "6"> 
	 <?php if (IsInRole('Coordinator')) { ?>
<button class="button button1" formaction="coordinatorProfile.php"><a href="coordinatorProfile.php"><h4>PROFILE</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<button class="button button1"formaction="report.php"><a href="report.php"><h4>REPORT</h4><br><img src="https://image.flaticon.com/icons/svg/1243/1243557.svg" width="300" height="150"></a></button>
	
<button class="button button1" formaction="Capprove.php"><a href="Capprove.php"><h4>STUDENT APPROVAL</h4><br><img src="https://image.flaticon.com/icons/svg/1170/1170220.svg" width="300" height="150"></a></button>

<button class="button button1" formaction="allocation.php"><a href="allocation.php"><h4>STUDENT-LECTURER ALLOCATION</h4><br><img src="http://cdn.onlinewebfonts.com/svg/img_563914.png" width="300" height="150"></a></button>

<?php }?>

<?php if (IsInRole('Student')) { ?>
<button class="button button1" formaction="studentProfile.php"><a href="studentProfile.php"><h4>PROFILE</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<button class="button button1"formaction="SvandTitleApplication.php"><a href="SvandTitleApplication.php"><h4>SV AND TITLE APPLICATION</h4><br><img src="https://image.flaticon.com/icons/svg/1243/1243557.svg" width="300" height="150"></a></button>
<?php }?>

<?php if (IsInRole('Lecturer')) { ?>
<button class="button button1" formaction="lecturerProfile.php"><a href="lecturerProfile.php"><h4>PROFILE</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<button class="button button1"formaction="Lapprove.php"><a href="Lapprove.php"><h4>STUDENT APPROVAL</h4><br><img src="https://image.flaticon.com/icons/svg/1243/1243557.svg" width="300" height="150"></a></button>
	
<button class="button button1" formaction="fypstdlist.php"><a href="fypstdlist.php"><h4>FYP STUDENT</h4><br><img src="https://image.flaticon.com/icons/svg/1170/1170220.svg" width="300" height="150"></a></button>

<?php }?>
	</font> </h1></center>
	


</div>
</head>

</html>
<?php include 'footer.php';?>