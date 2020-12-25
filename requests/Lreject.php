<?php
    include('functions.php');
    $U_id = $_GET['U_id'];

     $link = mysqli_connect("localhost","root","","fyp");
     $query = " SELECT * FROM requests LEFT JOIN student ON  requests.U_id = student.U_id where requests.U_id='$U_id' ;";
    //$query = "select * from `requests` where `U_id` = '$U_id'; ";
    //if(count(fetchAll($query)) > 0){
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
            $message = $row['message'];
    
                  $query2 = "INSERT INTO reject (U_id, S_category,L_id, L_name, A_title, A_objective,A_problem, A_scope, A_field, A_software, A_tools, A_technique, message, date) VALUES ('$U_id','$S_category','$L_id', '$L_name', '$A_title', '$A_objective','$A_problem', '$A_scope', '$A_field', '$A_software', '$A_tools', '$A_technique', '$message', CURRENT_TIMESTAMP) ;";

        $result2 = mysqli_query($link, $query2) or die(mysqli_error($link));
if($result2==1){

}
}
    

        $query3 = "DELETE FROM `requests` WHERE `requests`.`U_id` = '$U_id';";
        $result3 = mysqli_query($link, $query3) or die(mysqli_error($link));
if($result3==1){
             echo "<script>(Student has been accepted.)</script>";
        }else{
            echo "Unknown error occured. Please try again.";
        }
    
?>
<br/><br/>
<a href="dashboard.php">Back</a>