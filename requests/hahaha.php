<?php
   //we need session for the log in thingy XD 
    
  include '../header.php';
  
$a = $_SESSION['U_id'];?>


<?php CheckRole('Student') ?>


<?php
$mysqli = NEW MySQLi ('localhost','root','','fyp');

$resultSet = $mysqli -> query ("SELECT * FROM lecturer ");
$result = $mysqli->query($resultSet);
    if($result){
        $row = mysqli_fetch_assoc($result);
        $L_id = $row['L_id'];
        $L_name = $row['L_name'];
}
?>

    <br><br><br><br><br>
    <center><h1><b><font size = "6"> SV and Title Application</font></b></h1></center>
<link rel="stylesheet" type="text/css" href="../style.css">

        <br>
        <br><br><br>
        <center>

 
        
      <br><br><br><br><br><div id="">
<table>
                <form method="post" action="hahaha.php">
            
                
                    <tr><td>FYP SUPERVISOR  :</td>
                    <td><select id =" L_id" name="L_id">
               <?php

                while ( $row = $resultSet -> fetch_assoc())
  //$A_idsvnumber = $_GET ['A_idsvnumber'];
 //$Lname = $_GET ['L_name'];

    {
           $L_id = $_row ['L_id'];
           $L_name = $_row ['L_name'];
   echo '<option value="' . $row['L_id']. '">' . $row['L_name'] . '</option>';
        //echo "<option value = '{$row['U_id']}'"; 
        //if ($A_idsvnumber == $row ['A_idsvnumber'])
           
      //echo "selected = 'selected'";
       //echo ">{$row['L_name']}</option>";
       


       

       
     
        //echo "<option value='$L_name'>$L_name </option>";
       //echo '<option value="'.$row['U_id'].'">'.$row['L_name'].' </option>';
       //echo "<option value=$row[U_id]>$row[L_name]</option>"; 
 

 }
 //echo "</select>";
?>
</select></td></tr>

                    <tr>
                    <td>TITLE  :</td>
                    <td><input type="text" id="A_title" name="A_title"></td>
                    </tr>
                    
                    <tr>
                    <td>OBJECTIVE  :</td>
                    <td><input type="text" id="A_objective"  name="A_objective"></td>
                    </tr>
                
                <tr>
                    <td>PROBLEM STATEMENT  :</td>
                    <td><input type="text" id="A_problem" name="A_problem"></td>
                </tr>
                <tr>
                    <td>SCOPE  :</td>
                    <td><input type="text" id="A_scope" name="A_scope"></td>
                </tr>
                <tr>
                    <td>FIELD  :</td>
                    <td><input type="text" id="A_field" name="A_field"></td>
                </tr>
                <tr>
                    <td>SOFTWARE  :</td>
                    <td><input type="text" id="A_software" name="A_software"></td>
                </tr>
                <tr>
                    <td>TOOLS  :</td>
                    <td><input type="text" id="A_tools" name="A_tools"></td>
                </tr>
                <tr>
                    <td>TECHNIQUE  :</td>
                    <td><input type="text" id="A_technique" name="A_technique"></td>
                </tr>
                </table><br>
                 

            <div class="input-group">
            <button type="submit" class="btn" name="reg_svtitle">Submit</button>
        </div>

            
            </div>
        </center>
    <br><br><br><br><br>

<?php

  if (isset($_POST['reg_svtitle'])) {

        // receive all input values from the form
            $L_id = mysqli_real_escape_string($mysqli, $_POST['L_id']);
            $L_name = mysqli_real_escape_string($mysqli, $_POST['L_name']);
            $title = mysqli_real_escape_string($mysqli, $_POST['A_title']);
            $objective = mysqli_real_escape_string($mysqli, $_POST['A_objective']);
            $problem =mysqli_real_escape_string($mysqli, $_POST['A_problem']);
            $scope = mysqli_real_escape_string($mysqli, $_POST['A_scope']);
            $field = mysqli_real_escape_string($mysqli, $_POST['A_field']);
            $software = mysqli_real_escape_string($mysqli, $_POST['A_software']);
            $tools = mysqli_real_escape_string($mysqli, $_POST['A_tools']);
            $technique = mysqli_real_escape_string($mysqli, $_POST['A_technique']);
          
            $message = "$a would like to request an account.";

              $query = "INSERT INTO requests (U_id,L_id, L_name, A_title, A_objective,A_problem, A_scope, A_field, A_software, A_tools, A_technique, message, date) VALUES ('$a','$L_id', '$L_name', '$title', '$objective','$problem', '$scope', '$field', '$software', '$tools', '$technique', '$message', CURRENT_TIMESTAMP) ";

          if (mysqli_query($mysqli, $query)){
         
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
         
         }
         }   
     


      



               
          ?>



    
<?php include '../footer.php';?>