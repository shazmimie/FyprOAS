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
    

            

$query2 = "UPDATE student SET L_id='$L_id',L_name='$L_name' WHERE U_id='$U_id'  ;";
//$query2 = "INSERT INTO student (L_id,L_name) VALUES ('$L_id','$L_name') where U_id='$U_id' ;";
//$result2 = mysqli_query($mysqli, $query2) or die(mysqli_error($mysqli));
$result2 = $link->query($query2);
if($result2)
{
$query = " SELECT * from student where U_id='$U_id';";
   $result = mysqli_query($link, $query);
  

    while ( $row = $result -> fetch_assoc()) {
            $U_id = $row['U_id'];
            $S_category = $row['S_category'];
            $L_id = $row['L_id'];
            $L_name = $row['L_name'];
        }
$query4 = " INSERT INTO application (U_id,S_category,L_id, L_name, date) VALUES ('$U_id','$S_category','$L_id', '$L_name', CURRENT_TIMESTAMP)  ;";
//$result3 = mysqli_query($mysqli, $query3) or die(mysqli_error($mysqli));
$result4 = $link->query($query4);
if($result4)
{

  echo "Unknown error occured. Please try again.";

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
<a href="dashboard.php">Back</a>