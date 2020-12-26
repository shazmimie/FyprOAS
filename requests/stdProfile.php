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
    <br><br>    <div class="container">
  <center>
    <h2>Student Profile</h2><br><br><br><br>
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
                         <table border="1">
                        <tr><tr>
                
                      <td><b><p class="jumbotron-heading">NAME:  </b></td><td><?php echo $row['U_name'] ?></p></td></tr>
                      <td><b><p class="lead text-muted">ID:  </b></td><td><?php echo $row['U_id'] ?></p></td></tr>
                        <td><b><p class="lead text-muted">PROGRAM:  </b></td><td><?php echo $row['S_program'] ?></p></td></tr>
                     <td><b><p class="lead text-muted">ACADEMIC ADVISOR:  </b></td><td><?php echo $row['S_pa'] ?></p></td></tr>
       
                          <td><b><p class="lead text-muted">FYP TITLE:  </b></td><td><?php echo $row['A_title'] ?></p></td></tr>
                      <td><b><p class="lead text-muted">OBJECTIVE:  </b></td><td><?php echo $row['A_objective'] ?></p></td></tr>
                       <td><b><p class="lead text-muted">PROBLEM STATEMENT:  </b></td><td><?php echo $row['A_problem'] ?></p></td></tr>
                       <td><b><p class="lead text-muted">SCOPE:  </b></td><td><?php echo $row['A_scope'] ?></p></td></tr>
                         <td><b><p class="lead text-muted">FIELD:  </b></td><td><?php echo $row['A_field'] ?></p></td></tr>
                          <td><b><p class="lead text-muted">SOFTWARE:  </b></td><td><?php echo $row['A_software'] ?></p></td></tr>
                           <td><b><p class="lead text-muted">TOOLS:  </b></td><td><?php echo $row['A_tools'] ?></p></td></tr>
                            <td><b><p class="lead text-muted">TECHNIQUE:  </b></td><td><?php echo $row['A_technique'] ?></p></td>
                      </tr></tr>
                        </table>
            <?php
                    }
                }else{
                    echo "No Pending Requests.";
                }
            ?>
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
