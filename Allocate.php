

<?php
   //we need session for the log in thingy XD 
   
  include 'header.php';
 include("function.php");
   //$L_id = $_GET['L_id'];
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
   

  </head>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="main">
 
   
   <body><br><br>
<center>
<br><br><br><br><br><br><br><h2>Allocation:</h2><br><br><br><br>
    <center>

<table border="1" align="center">
<tr>
  <th> Student ID</th>
    <th>Category</th>
   <th>FYP Title</th>
    <th>Objective</th>
    <th>Problem Statement</th>
    <th>Scope</th>
    <th>Field</th>
    <th>Software</th> 
    <th>Tools</th>
    <th>Technique</th>
    <th>Lecturer ID</th>
    <th>Lecturer Name</th>
    <th>Update</th>
  

  
</tr>
   

   

      <section class="jumbotron text-center">
        <div class="container">

          
                 <?php
$link = NEW MySQLi ('localhost','root','','fyp');
//$link = NEW MySQLi ("localhost","root","","fyp");

//$resultSet = $link -> query("SELECT  * FROM lecturer  ;");

//$result = $link->query($resultSet);
    //if($resultSet){
       //$row = mysqli_fetch_assoc($result);
        //$row = mysqli_fetch_assoc($result);
  //while ( $row = $result -> fetch_assoc()) {
//while($row = mysqli_fetch_array($result)){
        //$U_id = $row ['U_id'];
        //$U_name = $row ['U_name'];



              $query = "SELECT * from reject  ";
                //$query = "select * from requests2 order by L_id ASC ";
   

                //if(count(fetchAll($query))>0){
                    //foreach(fetchAll($query) as $row){
              $result = mysqli_query($link, $query);


    //Loop the recordset $rs
  

    while ( $row = $result -> fetch_assoc()) {
                          $U_id = $row['U_id'];
            $S_category = $row['S_category'];
            $L_id = $row['L_id'];
            $L_name = $row['L_name'];
            $A_title = $row['A_title'];
            $A_objective = $row['A_objective'];
            $A_problem = $row['A_problem'];
            $A_scope = $row['A_scope'];
            $A_field = $row['A_field'];
            $A_software = $row['A_software'];
            $A_tools = $row['A_tools'];
            $A_technique = $row['A_technique'];


                        ?>
                         <tr>
  <form action="Allocate.php?U_id=<?php echo $U_id;?>" method="post">
               
                     <td><p class="lead text-muted"><?php echo $row['U_id'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['S_category'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['A_title'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['A_objective'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['A_problem'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['A_scope'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['A_field'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['A_software'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['A_tools'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['A_technique'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['L_id']?></p></td>
                     <td><select id="L_id" name="L_id"><?php $resultSet = $link -> query("SELECT  * FROM lecturer where L_status='Available'  ;");

//$result = $link->query($resultSet);
    if($resultSet){
       //$row = mysqli_fetch_assoc($result);
        //$row = mysqli_fetch_assoc($result);
  //while ( $row = $result -> fetch_assoc()) {
//while($row = mysqli_fetch_array($result)){
        //$U_id = $row ['U_id'];
        //$U_name = $row ['U_name'];
}
                     while ( $row = $resultSet -> fetch_assoc()) {

  //$A_idsvnumber = $_GET ['A_idsvnumber'];
 //$Lname = $_GET ['L_name'];

    
           $L_id = $_row ['L_id'];
           $L_name = $_row ['L_name'];
echo '<option value="' . $row['L_id']. '">' . $row['L_name'] . '</option>';
    }
    ?></select></td>  
                        
               <div class="input-group">
               
            <td><button type="submit"  class="btn" name="update">Update</button></td>
        </div></form> </tr> 
      
                    
            <?php
                    }
                
            ?>


<?php

  $errors = array(); 
 
if (isset($_POST['update'])) {
$id = $_GET['U_id'];
        // receive all input values from the form
      $L_id = mysqli_real_escape_string($link, $_POST['L_id']);
      


        // receive all input values from the form
    

     if (count($errors) == 0) {        

$query2 = "UPDATE reject SET L_id='$L_id',L_name='$L_name' WHERE U_id='$id'  ;";
//$query2 = "INSERT INTO student (L_id,L_name) VALUES ('$L_id','$L_name') where U_id='$U_id' ;";
//$result2 = mysqli_query($mysqli, $query2) or die(mysqli_error($mysqli));
$result2 = $link->query($query2)or die(mysqli_error($link));
if($result2)
{
  //$query6 = "UPDATE student SET L_id='$L_id',L_name='$L_name' WHERE U_id='$id' and L_id='L_id' ;";

//$result6 = $link->query($query6)or die(mysqli_error($link));
//if($result6)
//{
$query = " SELECT * from reject left join lecturer on reject.L_id=lecturer.L_id where U_id='$id';";
   $result = mysqli_query($link, $query)or die(mysqli_error($link));
  

    while ( $row = $result -> fetch_assoc()) {
            $U_id = $row['U_id'];
            $S_category = $row['S_category'];
            $L_id = $row['L_id'];
            $L_name = $row['L_name'];
            $A_title = $row['A_title'];
            $A_objective = $row['A_objective'];
            $A_problem = $row['A_problem'];
            $A_scope = $row['A_scope'];
            $A_field = $row['A_field'];
            $A_software = $row['A_software'];
            $A_tools = $row['A_tools'];
            $A_technique = $row['A_technique'];
        }

 $query4 = "INSERT INTO application (U_id, S_category,L_id, L_name, A_title, A_objective,A_problem, A_scope, A_field, A_software, A_tools, A_technique, date) VALUES ('$U_id','$S_category','$L_id', '$L_name', '$A_title', '$A_objective','$A_problem', '$A_scope', '$A_field', '$A_software', '$A_tools', '$A_technique', CURRENT_TIMESTAMP) ;";
//$result3 = mysqli_query($mysqli, $query3) or die(mysqli_error($mysqli));
$result4 = $link->query($query4)or die(mysqli_error($link));
if($result4)
{
 $query6 = "UPDATE student SET L_id='$L_id',L_name='$L_name' WHERE U_id='$id' ;";

$result6 = $link->query($query6)or die(mysqli_error($link));
if($result6){


      }
}
}
}



  $query7 = "DELETE FROM reject  WHERE U_id='$id'  ;";
  $result7 = $link->query($query7)or die(mysqli_error($link));
if($result7){
 //$query5 = "DELETE FROM `reject` WHERE `reject`.`U_id` = '$U_id';";
        //$result5 = mysqli_query($link, $query5) or die(mysqli_error($link));

//if($result5){
echo "<script>window.open('Allocate.php','_self')</script>";


         }

//}


            
       else{
            echo "Unknown error occured. Please try again.";
        }
      }
    
      
          
       


              //$query = "INSERT INTO application (U_id,L_id, L_name, date) VALUES ('$U_id','$L_id', '$L_name', CURRENT_TIMESTAMP)  ";

          //if (mysqli_query($mysqli, $query)){
         
                //echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            //}else{
                //echo "<script>alert('Unknown error occured.')</script>";
         
         //}
         //}   
               
          ?>
       
</div>
      </section>
    </table>
    <a href="index.php">Back</a>
    </center>
    </center>

    </div>
                      
 <?php include 'footer.php'; ?> 


 
  </body>
</html>


