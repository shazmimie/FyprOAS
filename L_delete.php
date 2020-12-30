<?php
    include('function.php');
    $U_id = $_GET['U_id'];
    
    $query = "DELETE FROM `application` WHERE `application`.`U_id` = '$U_id';";
        if(performQuery($query)){
            echo "Student has been deleted.";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="dashboard.php">Back</a>