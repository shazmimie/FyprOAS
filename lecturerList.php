
  <!-- Breadcrumbs-->
 
<?php include 'header.php';?>
 <!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<div class="container">

  <center>
<br><br><br><br><br><br><br><br><br><br><h2>Manage Lecturer:</h2><br><br><br><br>
   

<h1 align="center"><font size = "6"> 
   <?php if (IsInRole('Coordinator')) { ?>
<button class="button button3" formaction="addLecturer.php"><a href="addLecturer.php"><h4>Add Lecturer</h4><br><img src="https://image.flaticon.com/icons/svg/1243/1243557.svg" width="300" height="150"></a></button>

<button class="button button3" formaction="updateLecturer.php"><a href="updateLecturer.php"><h4>Lecturer List</h4><br><img src="https://image.flaticon.com/icons/svg/1170/1170220.svg" width="300" height="150"></a></button>



<?php }?>


  </font> </h1></center>
  


</div>
</head>

</html>
<?php include 'footer.php';?>