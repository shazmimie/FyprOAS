<?php
   //we need session for the log in thingy XD 
    
  include '../header.php';
include("functions.php");
$U_id = $_GET['U_id'];
   $a = $_SESSION['U_id'];?>
 
 <?php CheckRole('Lecturer') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending Request System in PHP and MySql</title>

    <!-- Bootstrap core CSS -->
   
<link rel="stylesheet" type="text/css" href="../style.css">
  </head>

  <body>

   

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
            <?php
              //$query = "SELECT * FROM requests LEFT JOIN lecturer ON requests.L_id = lecturer.L_id LEFT JOIN student ON student.U_id = requests.U_id where requests.U_id=student.U_id'";

               $query = "SELECT * FROM requests LEFT JOIN student ON requests.U_id = student.U_id LEFT JOIN lecturer ON requests.L_id = lecturer.L_id  where requests.U_id='$U_id' AND requests.L_id='$a' ";
                //$query = "select * from requests2 order by L_id ASC ";
         

                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                       $L_id = $row['L_id'];
                         $L_name = $row['L_name'];
    
            $A_title = $row['A_title'];

                        ?>
                
                      <h3><b><p class="jumbotron-heading">NAME:  </b><?php echo $row['U_name'] ?></p></h3>
                      <b><p class="lead text-muted">ID:  </b><?php echo $row['U_id'] ?></p>
                        <b><p class="lead text-muted">PROGRAM:  </b><?php echo $row['S_program'] ?></p>
                     <b><p class="lead text-muted">ACADEMIC ADVISOR:  </b><?php echo $row['S_pa'] ?></p>
                      <b><p class="lead text-muted">SUPERVISOR:  </b><?php echo $row['L_name'] ?></p>
                          <b><p class="lead text-muted">FYP TITLE:  </b><?php echo $row['A_title'] ?></p>
                      <b><p class="lead text-muted">OBJECTIVE:  </b><?php echo $row['A_objective'] ?></p>
                       <b><p class="lead text-muted">PROBLEM STATEMENT:  </b><?php echo $row['A_problem'] ?></p>
                       <b><p class="lead text-muted">SCOPE:  </b><?php echo $row['A_scope'] ?></p>
                         <b><p class="lead text-muted">FIELD:  </b><?php echo $row['A_field'] ?></p>
                          <b><p class="lead text-muted">SOFTWARE:  </b><?php echo $row['A_software'] ?></p>
                           <b><p class="lead text-muted">TOOLS:  </b><?php echo $row['A_tools'] ?></p>
                            <b><p class="lead text-muted">TECHNIQUE:  </b><?php echo $row['A_technique'] ?></p>
                      
                     
            <?php
                    }
                }else{
                    echo "No Pending Requests.";
                }
            ?>
          
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
