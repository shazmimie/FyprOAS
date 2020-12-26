

<?php
   //we need session for the log in thingy XD 
   
  include '../header.php';
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
<link rel="stylesheet" type="text/css" href="../style.css">
<div class="main">
 
   
   <body><br><br>
<center>
<h2>Allocation:</h2><br><br><br><br>
    <center>

<table border="0" align="center">
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

$resultSet = $link -> query("SELECT  * FROM lecturer  ;");

//$result = $link->query($resultSet);
    if($resultSet){
       //$row = mysqli_fetch_assoc($result);
        //$row = mysqli_fetch_assoc($result);
  //while ( $row = $result -> fetch_assoc()) {
//while($row = mysqli_fetch_array($result)){
        //$U_id = $row ['U_id'];
        //$U_name = $row ['U_name'];
}


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
                     <td><p class="lead text-muted"><?php echo $row['L_name']?></p></td>
                     <td><select id="L_name" name="L_name"><?php 
                     while ( $row = $resultSet -> fetch_assoc()) {

  //$A_idsvnumber = $_GET ['A_idsvnumber'];
 //$Lname = $_GET ['L_name'];

    
           $L_id = $_row ['L_id'];
           $L_name = $_row ['L_name'];
echo '<option value="' . $row['L_name']. '">' . $row['L_name'] . '</option>';
    }
    ?></select></td>  
                        
                    
            <td><input type="submit" name="update" value="update"></td></form> </tr>         
            <?php
                    }
                
            ?>

<?php
if(isset($_POST['update'])){

$id = $_GET['U_id'];

$L_name = $_POST['L_name'];

$update = "INSERT INTO reject (L_name) VALUES ('$L_name') where U_id='$id'";

$run_update = mysqli_query($link, $update);

if($run_update)
{
  $query = " SELECT * from reject where U_id='$id';";
   $result = mysqli_query($link, $query);
  

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
$result4 = $link->query($query4);
if($result4)
{
 echo "<script>window.open('Allocate.php','_self')</script>";
}

else
{
  echo "<script>alert('Update Failed')</script>";
}
}
}
?>
       
</div>
      </section>
    </table>
    </center>
    </center>

    </div>
                       <?php include '../sidebar.php' ;?>
 <?php include '../footer.php'; ?> 


 
  </body>
</html>


