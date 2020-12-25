
  <!-- Breadcrumbs-->
 
<?php include 'header.php';?>


  <center>

<div class="container">
<h1 align="center"><font size = "6"> 
	 <?php if (IsInRole('Coordinator')) { ?>
<button class="button button3" formaction="coordinator/coordinatorProfile.php"><a href="coordinator/coordinatorProfile.php"><h4>PROFILE</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<button class="button button3"formaction="coordinator/report.php"><a href="coordinator/report.php"><h4>REPORT</h4><br><img src="https://image.flaticon.com/icons/svg/1243/1243557.svg" width="300" height="150"></a></button>
	
<button class="button button3" formaction="requests/Capprove.php"><a href="requests/Capprove.php"><h4>STUDENT APPROVAL</h4><br><img src="https://image.flaticon.com/icons/svg/1170/1170220.svg" width="300" height="150"></a></button>

<button class="button button3" formaction="coordinator/allocation.php"><a href="coordinator/allocation.php"><h4>STUDENT-LECTURER ALLOCATION</h4><br><img src="http://cdn.onlinewebfonts.com/svg/img_563914.png" width="300" height="150"></a></button>
<?php }?>

<?php if (IsInRole('Student')) { ?>
<button class="button button3" formaction="student/studentProfile.php"><a href="student/studentProfile.php"><h4>PROFILE</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<button class="button button3"formaction="requests/SvandTitleApplication.php"><a href="requests/SvandTitleApplication.php"><h4>SV AND TITLE APPLICATION</h4><br><img src="https://image.flaticon.com/icons/svg/1243/1243557.svg" width="300" height="150"></a></button>
<?php }?>

<?php if (IsInRole('Lecturer')) { ?>
<button class="button button3" formaction="lecturer/lecturerProfile.php"><a href="lecturer/lecturerProfile.php"><h4>PROFILE</h4><br><img src="https://www.nicepng.com/png/full/438-4388230_profile-user-update-profile-icon-png.png" width="300" height="150"></a></button>

<button class="button button3"formaction="requests/Lapprove.php"><a href="requests/Lapprove.php"><h4>STUDENT APPROVAL</h4><br><img src="https://image.flaticon.com/icons/svg/1243/1243557.svg" width="300" height="150"></a></button>
	
<button class="button button3" formaction="lecturer/fypstdlist.php"><a href="lecturer/fypstdlist.php"><h4>FYP STUDENT</h4><br><img src="https://image.flaticon.com/icons/svg/1170/1170220.svg" width="300" height="150"></a></button>

<?php }?>
	</font> </h1></center>
	
</div>
<?php include 'footer.php';?>
</head>
</html>