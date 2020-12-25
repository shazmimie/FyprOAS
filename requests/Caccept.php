<?php
    include('functions.php');
    $U_id = $_GET['U_id'];

      $link = mysqli_connect("localhost","root","","fyp");

     $query = " SELECT requests2.U_id, requests2.L_id, requests2.A_title, requests2.A_objective, requests2.A_problem, requests2.A_scope, requests2.A_field, requests2.A_software, requests2.A_tools, requests2.A_technique, requests2.A_title, student.S_category,  lecturer.L_name FROM requests2 LEFT JOIN lecturer ON requests2.L_id = lecturer.L_id JOIN student ON requests2.U_id = student.U_id where requests2.U_id='$U_id';";
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
           
$query2 = "update student set L_name='$L_name'  where U_id='$U_id'";

$result2 = mysqli_query($link, $query2) or die(mysqli_error($link));
if($result2==1)
{

$query3 = "INSERT INTO application (U_id,S_category,L_id, L_name, A_title, A_objective,A_problem, A_scope, A_field, A_software, A_tools, A_technique, date) VALUES ('$U_id','$S_category','$L_id', '$L_name', '$A_title', '$A_objective','$A_problem', '$A_scope', '$A_field', '$A_software', '$A_tools', '$A_technique', CURRENT_TIMESTAMP) ;";
$result3 = mysqli_query($link, $query3) or die(mysqli_error($link));
if($result3==1)
{


         }
    }
    }
    $query4 = "DELETE FROM `requests2` WHERE `requests2`.`U_id` = '$U_id';";
        $result4 = mysqli_query($link, $query4) or die(mysqli_error($link));
if($result4==1){
             echo "<script>(Student has been accepted.)</script>";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    
   


    
?>
<br/><br/>
<a href="dashboard.php">Back</a>