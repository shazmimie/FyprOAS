<?php include 'constants.php';?>
<?php 
  session_start();

  if(!isset($_SESSION['U_id']))
  {
    header('location:/' . ROOT .'/login.php');
    exit;
  }   
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'selectDB.php';?>
<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="/<?php echo ROOT?>/dashboard.php">FYPrOAS</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
   
    </form>
    <span style="color:white">Hello <?php echo $_SESSION['U_id'] ?></span>&nbsp;
    <span style="color:white">(<?php echo $_SESSION['role'] ?>)</span>

    <!-- Navbar -->
    
       
                <?php if (IsInRole('Student')) { ?>

                  
       
    </a>
    
          <div class="dropdown-divider"></div>
           
                <a href="../index.php">Home</a>
                <a formaction="studentProfile.php"><a href="studentProfile.php">Profile</a>
                <a formaction="requests/SvandTitleApplication.php"><a href="requests/SvandTitleApplication.php">SV and Title Application</a>
                <a formaction="Notification.php"><a href="Notification.php">Notification</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>

  
     
  
  </nav>
 <?php }?>

 <?php if (IsInRole('Lecturer')) { ?>

                    
       
    </a>
    
          <div class="dropdown-divider"></div>
            
            <a href="../index.php">Home</a>
                <a formaction="lecturerProfile.php"><a href="lecturerProfile.php">Profile</a>
                <a formaction="approvestudent.php"><a href="approvestudent.php">Student Approval</a>
                <a formaction="fypstdlist.php"><a href="fypstdlist.php">FYP Student</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>

  
     
  
  </nav>

 <?php }?>

 <?php if (IsInRole('Coordinator')) { ?>

               
    
          <div class="dropdown-divider"></div>

                <a href="../index.php">Home</a>
                <a formaction="coordinatorProfile.php"><a href="coordinatorProfile.php">Profile</a>
                <a formaction="report.php"><a href="report.php">Report</a>
                <a formaction="approvestudent.php"><a href="approvestudent.php">Student Approval</a>
                <a formaction="allocation.php"><a href="allocation.php">Student-Lecturer Allocation</a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
  
  
     
  
  </nav>

 <?php }?>
   <div id="wrapper">
    <!-- Sidebar -->
   
 

    <div id="content-wrapper">
      <div class="container-fluid">
