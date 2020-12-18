<?php include '../header.php';

$a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
<div class="main">
   
   <body><br><br>
<center>
<h2>Allocation:</h2><br><br><br><br>
    <center>

<table border="0" align="center">
<tr>
   <th> Lecturer ID</th>
  <th> Lecturer Name</th>
  <th>Student Name</th>
  <th>Student ID</th>
  <th> Category</th>
  
  

  
</tr>

  <?php
   //SQL query
//$query= "SELECT person_unique_id, person_name, group_concat( mile_running_time ) AS miles, group_concat( bench_press_weight_lbs ) AS bench, group_concat( squat_weight_lbs ) AS squat FROM exercise_result GROUP BY person_unique_id;";
  $link = mysqli_connect("localhost","root","","fyp");
     $query = " SELECT application.L_id, application.L_name AS L_name,  student.U_name AS U_name, student.U_id AS U_id, student.S_category AS S_category  FROM application LEFT JOIN student ON student.U_id = application.U_id   order by L_id ASC  ;"  or die(mysqli_connect_error());
    $result = mysqli_query($link, $query);

    


    //Loop the recordset $rs
  
while ( $row = $result -> fetch_assoc()) {
  $L_id= $row['L_id'];
$L_name= $row['L_name'];
$U_name = $row['U_name'];
$U_id = $row['U_id'];
      
      
      ?>
    
         <tr>
                     <td><p class="lead text-muted"><?php echo $row['L_id'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['L_name'] ?></p></td>
                        <td><p class="lead text-muted"><?php echo $row['U_name'] ?></p></td>
                         <td><p class="lead text-muted"><?php echo $row['U_id'] ?></p></td>
                      <td><p class="lead text-muted"><?php echo $row['S_category'] ?></p></td>
                      
                     
                     
                    </tr>
     
  <?php

  }
?>
</table>
</center>
  </div>



<?php include '../sidebar.php' ;?>
 <?php include '../footer.php'; ?>

</html>
 </head>

