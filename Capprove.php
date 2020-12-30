<?php
   //we need session for the log in thingy XD 
    
  include 'header.php';
  include("functions.php");
   $a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending Request System in PHP and MySql</title>

    <!-- Bootstrap core CSS -->
   
<link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>

   

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
<center><br><br>
  <h2>Student Approval</h2><br><br><br><br>
          <table border="1" align="center">
<tr>
  
  <th><label for ="L_id">Lecturer ID</label>
   <th><label for ="L_name">Lecturer Name</label>
  <th><label for ="U_id">Student ID</label>
  <th><label for ="S_category">Category</label>
     <th><label for ="A_title">Title</label>
       <th><label for ="date">Date</label>
        <th>View</th>
  <th>Accept</th>
  <th>Reject</th>
     <th>Count</label>
  
  
</tr>
            <?php

            //$mysqli = NEW MySQLi ('localhost','root','','fyp');
              $query = "SELECT * FROM requests2 LEFT JOIN student ON requests2.U_id = student.U_id LEFT JOIN lecturer ON requests2.L_id = lecturer.L_id   order by requests2.L_id ASC";

                //$query = "select * from requests2 order by L_id ASC ";
         

                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                       $L_id = $row['L_id'];
                         $L_name = $row['L_name'];
    
            $A_title = $row['A_title'];

                        ?>
                  <tr>
                     <td><p class="lead text-muted"><?php echo $row['L_id'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['L_name'] ?></p></td>
                        <td><p class="lead text-muted"><?php echo $row['U_id'] ?></p></td>
                         <td><p class="lead text-muted"><?php echo $row['S_category'] ?></p></td>
                      <td><p class="lead text-muted"><?php echo $row['A_title'] ?></p></td>
                       <td><p class="lead text-muted"><?php echo $row['date'] ?></p></td>
                     
                      <p>
                        <td><a href="CstdInfo.php?U_id=<?php echo $row['U_id'] ?>" class="btn btn-secondary my-2">View</a></td>
                        <td><a href="Caccept.php?U_id=<?php echo $row['U_id'] ?>" class="btn btn-primary my-2">Accept</a></td>
                        <td><a href="Creject.php?U_id=<?php echo $row['U_id'] ?>" class="btn btn-secondary my-2">Reject</a></td>
                      </p>
                  
                  
                  <td><p class="lead text-muted"><?php 


 $query = "SELECT S_category,  COUNT(U_id) FROM application where L_id='$L_id'";
   
    if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
      echo  $row['COUNT(U_id)'] ;

  }
    }

   

     
 
   
 ?></p></td>  </tr>

            <?php


                 }   
                }else{
                    echo "No Pending Requests.";
                }
              

            ?>

          </table>
     
        <a href="index.php">Back</a>
          </center>
             </div>
      </section>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
