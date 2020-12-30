<?php include 'header.php';
 include("function.php");
$a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>

<!DOCTYPE html>
<html>
<head>
   <br><br><br><br><br><br><br><br><br><br><title>Home</title>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  
<div class="main">
   
   <body><br><br>
<center>
<h2>Allocation:</h2><br><br><br><br>
    <center>

<table border="1" align="center">
<tr>
  <th> No</th>
    <th>View</th>
   <th> Lecturer ID</th>
  <th> Lecturer Name</th>
    <th> PTA1</th>
      <th> PTA2</th>
        <th> FYP1</th>
          <th> FYP2</th>
  <th>Total Student Supervised</th>
  
  
  
  

  
</tr>

<?php


//$query = "SELECT lecturer.L_count, lecturer.L_id, lecturer.L_name, application.S_category FROM lecturer LEFT JOIN application ON lecturer.L_id.application.L_id ; " or die(mysqli_connect_error());

$query = "SELECT * FROM lecturer where L_status='Available' ";
//$result = mysqli_query($link, $query);


    //Loop the recordset $rs
  

    //while ( $row = $result -> fetch_assoc()) {
        if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                     
$L_count= $row['L_count'];
$L_name= $row['L_name'];
$L_id = $row['L_id'];



    
?>
<tr>

   <td><p class="lead text-muted"><?php echo $row['L_count'] ?></p></td>
   <p>
                          <td><a href="allo.php?L_id=<?php echo $row['L_id'] ?>" class="btn btn-secondary my-2">View</a>



                          </td>
                       
                      </p>
                     <td><p class="lead text-muted"><?php echo $row['L_id'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['L_name'] ?></p></td>
                        <td><p class="lead text-muted"><?php  
    $query = "SELECT S_category,  COUNT(U_id) FROM application where S_category='PTA1' AND L_id='$L_id'";
   
    if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){

      echo  $row['COUNT(U_id)'] ;
    }
  }
?></p></td>
                         <td><p class="lead text-muted"><?php 
   $query = "SELECT S_category,  COUNT(U_id) FROM application where S_category='PTA2' AND L_id='$L_id'";
   
    if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){

      echo  $row['COUNT(U_id)'] ;
    }
  }
?></p></td>
                      <td><p class="lead text-muted"><?php  
    $query = "SELECT S_category,  COUNT(U_id) FROM application where S_category='FYP1' AND L_id='$L_id'";
   
    if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){

      echo  $row['COUNT(U_id)'] ;
    }
  }
?></p></td>
                       <td><p class="lead text-muted"><?php 
    $query = "SELECT S_category,  COUNT(U_id) FROM application where S_category='FYP2' AND L_id='$L_id'";
   
    if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){

      echo  $row['COUNT(U_id)'] ;
    }
  }
?></p></td>
                       <td><p class="lead text-muted"><?php 
  $query = "SELECT S_category,  COUNT(U_id) FROM application where L_id='$L_id'";
   
    if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){

      echo  $row['COUNT(U_id)'] ;
    }
  }
 
?></p></td>
                     
                      
 <?php


                 }   
                }

  ?>


                    </tr></table>
                  <a href="index.php">Back</a></center></center></div>





 <?php include 'footer.php'; ?>

</html>
 </head>

