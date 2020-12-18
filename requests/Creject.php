<?php
    include('functions.php');
    $U_id = $_GET['U_id'];
    
    $query = "DELETE FROM `requests2` WHERE `requests2`.`U_id` = '$U_id';";
        if(performQuery($query)){
            echo "Account has been rejected.";
        }else{
            echo "Unknown error occured. Please try again.";
        }

?>
<br/><br/>
<a href="dashboard.php">Back</a>