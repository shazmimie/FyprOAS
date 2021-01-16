<?php
    //include('functions.php');
    //$U_id= $_GET['U_id'];
      //$L_id = $_GET['L_id'];
   
     $link = NEW MySQLi ('localhost','root','','fyp');

if (isset($_POST['addstd'])) {

        // receive all input values from the form
      $U_id = mysqli_real_escape_string($link, $_POST['U_id']);
      $L_id = mysqli_real_escape_string($link, $_POST['L_id']);
      $L_name = mysqli_real_escape_string($link, $_POST['L_name']);


        // receive all input values from the form
    

            

$query2 = "UPDATE reject SET L_id='$L_id',L_name='$L_name' WHERE U_id='$U_id'  ;";
//$query2 = "INSERT INTO student (L_id,L_name) VALUES ('$L_id','$L_name') where U_id='$U_id' ;";
//$result2 = mysqli_query($mysqli, $query2) or die(mysqli_error($mysqli));
$result2 = $link->query($query2)or die(mysqli_error($link));
if($result2)
{
  $query6 = "UPDATE student SET L_id='$L_id',L_name='$L_name' WHERE U_id='$U_id'  ;";
//$query2 = "INSERT INTO student (L_id,L_name) VALUES ('$L_id','$L_name') where U_id='$U_id' ;";
//$result2 = mysqli_query($mysqli, $query2) or die(mysqli_error($mysqli));
$result6 = $link->query($query6)or die(mysqli_error($link));
if($result6)
{
$query = " SELECT * from reject where U_id='$U_id';";
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

 $query5 = "DELETE FROM `reject` WHERE `reject`.`U_id` = '$U_id';";
        $result5 = mysqli_query($link, $query5) or die(mysqli_error($link));
if($result5){
echo "Accepted.";
 //header('location: addstd.php');

         }
    }
}
}
}


            
       else{
            echo "Unknown error occured. Please try again.";
        }
    
      
          
       


              //$query = "INSERT INTO application (U_id,L_id, L_name, date) VALUES ('$U_id','$L_id', '$L_name', CURRENT_TIMESTAMP)  ";

          //if (mysqli_query($mysqli, $query)){
         
                //echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            //}else{
                //echo "<script>alert('Unknown error occured.')</script>";
         
         //}
         //}   
               
          ?>
<br/><br/>
<a href="allo.php">Back</a>