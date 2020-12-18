
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:1%">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

    <?php if (IsInRole('Coordinator')) { ?>
   <div class="w3-sidebar w3-bar-block w3-red" style="width:25%">
  <a href="lecturerList.php" class="w3-bar-item w3-button"> Lecturer List</a>
  <a href="availableLecturer.php" class="w3-bar-item w3-button"> Available Lecturer</a>
  <a href="allocation.php" class="w3-bar-item w3-button">Allocation</a>
  <a href="allStudentList.php" class="w3-bar-item w3-button">All Student List</a>
  <a href="noSV.php" class="w3-bar-item w3-button">No SV</a>
  <a href="fyp1.php" class="w3-bar-item w3-button">FYP 1</a>
  <a href="fyp2.php" class="w3-bar-item w3-button">FYP 2</a>
  <a href="pta1.php" class="w3-bar-item w3-button">PTA 1</a>
  <a href="pta2.php" class="w3-bar-item w3-button">PTA 2</a>
    <?php }?>
    
   
	<?php if (IsInRole('Student')) { ?>
	 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Student</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
       
        <a class="w3-bar-item" href="/<?php echo ROOT ?>/student/studentProfile.php">View Profile</a>
        <a class="w3-bar-item" href="/<?php echo ROOT ?>/student/SvandTitleApplication.php">SV and Titile Application</a>      
    </div>
    </li>
	<?php }?>
	<?php if (IsInRole('Lecturer')) { ?>
	 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Lecturer</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="w3-bar-item" href="/<?php echo ROOT ?>/lecturer/lecturerProfile.php">Lecturer Profile</a>
         <a class="w3-bar-item" href="/<?php echo ROOT ?>/lecturer/studentApproval.php">View Despatchers Available</a>  
		 <a class="w3-bar-item" href="/<?php echo ROOT ?>/lecturer/studentList.php">View Booking</a>  
          
		  
    </div>
    </li>
	
	
	<?php }?>

    <li class="nav-item dropdown" style="display:none">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="display:none">
     
        <h6 class="dropdown-header">Other Pages:</h6>
        <a class="w3-bar-item" href="404.html">404 Page</a>
        <a class="w3-bar-item" href="blank.html">Blank Page</a>
    </div>
    </li>
</ul>

