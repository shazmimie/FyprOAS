<?php
    include('functions.php');
    $U_id = $_GET['U_id'];
     $query = " SELECT requests.U_id, requests.L_id, requests.A_title, requests.A_objective, requests.A_problem, requests.A_scope, requests.A_field, requests.A_software, requests.A_tools, requests.A_technique, requests.message,   lecturer.L_name FROM requests LEFT JOIN lecturer ON requests.L_id = lecturer.L_id where requests.U_id='$U_id' ;";
    //$query = "select * from `requests` where `U_id` = '$U_id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $U_id = $row['U_id'];
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
            $message = $row['message'];
    
                  $query = "INSERT INTO requests2 (U_id,L_id, L_name, A_title, A_objective,A_problem, A_scope, A_field, A_software, A_tools, A_technique, message, date) VALUES ('$U_id','$L_id', '$L_name', '$A_title', '$A_objective','$A_problem', '$A_scope', '$A_field', '$A_software', '$A_tools', '$A_technique', '$message', CURRENT_TIMESTAMP) ;";

        }
    }

        $query .= "DELETE FROM `requests` WHERE `requests`.`U_id` = '$U_id';";
        if(performQuery($query)){
         
            echo "Student has been accepted.";
             
        }else{
            echo "Unknown error occured. Please try again.";
        }

    
?>
<br/><br/>
<a href="dashboard.php">Back</a>