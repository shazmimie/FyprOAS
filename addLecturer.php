<?php include 'header.php';

$a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>

  <!-- Breadcrumbs-->
   
    <!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<div class="container">
   
   <body><br><br>
<center>
<br><br><br><br><br><br><br><br><br><br><h2>Add Lecturer:</h2><br><br><br><br>
    <center>

<table border="0" align="center">

<table>
   <?php
   //SQL query

  $link = mysqli_connect("localhost","root","","fyp");
  

     //$query = " SELECT user.U_name, user.U_id, user.S_program, user.S_category, user.S_pa, application.L_name, application.A_title FROM user LEFT JOIN application ON user.U_id = application.U_id WHERE user.U_id= '$a' ;"  or die(mysqli_connect_error());
    //$result = mysqli_query($link, $query);


    //Loop the recordset $rs
  

    //while ( $row = $result -> fetch_assoc()) {
        
  
$L_name= '';
$L_id= '';
$L_department = '';
$L_researchgroup = '';
$L_status = '';
 $errors = array();


//?>
<form action="addLecturer.php?L_id=<?php echo $L_id;?>" method="post">


<table>
<tr>
<td>Lecturer Name:</td>
<td><input type="text" name="L_name" value="<?php echo $L_name;?>"></td>
</tr>
<tr>
  <td>Lecturer ID:</td>
<td><input type="text" name="L_id" value="<?php echo $L_id;?>"></td>
</tr>
<tr><td>Department:</td>
  <td><select name="L_department"><option value="Computer Science (DCS)"
<?php
if($L_department =='Computer Science (DCS)'){
  echo "selected";
}
?>
>Computer Science (DCS)</option>
<option value="Software Engineering (BCS)"
<?php
if($L_department =='Software Engineering (BCS)'){
  echo "selected"; 
}
?>
>Software Engineering (BCS)</option>
<option value="Computer System & Networking (BCN)"
<?php
if($L_department =='Computer Systems & Networking (BCN)'){
  echo "selected"; 
}
?>
>Computer System & Networking (BCN)</option>
<option value="Graphics & Multimedia Technology (BCG)"
<?php
if($L_department =='Graphics & Multimedia Technology (BCG)'){
  echo "selected"; 
}
?>
>Graphics & Multimedia Technology (BCG)</option>
</select></td></tr>

<tr><td>Research Group:</td>
  <td><input type="text" name="L_researchgroup" value="<?php echo $L_researchgroup;?>"></td>
<tr>
<td>Status:</td>
<td><select name="L_status"><option value="Available"
<?php
if($L_status =='Available'){
  echo "selected";
}
?>
>Available</option>
<option value="Not Available"
<?php
if($L_status =='Not Available'){
  echo "selected"; 
}
?>
>Not Available</option>
</tr>

 

  </div>
   <td><input type="submit" name="addLecturer" value="Add"></td>
  </form>
</table>  
    

    <?php
     
if(isset($_POST['addLecturer'])){
$L_name = mysqli_real_escape_string($link, $_POST['L_name']);
    $id = mysqli_real_escape_string($link, $_POST['L_id']);
    $L_department = mysqli_real_escape_string($link, $_POST['L_department']);
    $L_researchgroup = mysqli_real_escape_string($link, $_POST['L_researchgroup']);
    $L_status = mysqli_real_escape_string($link, $_POST['L_status']);


if (empty($L_name)) { array_push($errors, "Supervisor Name is required"); }
    if (empty($id)) { array_push($errors, "Supervisor ID is required"); }
    if (empty($L_department)) { array_push($errors, "Department is required"); }
    if (empty($L_researchgroup)) { array_push($errors, "research Group is required"); }
    if (empty($L_status)) { array_push($errors, "Status is required"); }
   
            
              // register user if there are no errors in the form
    if (count($errors) == 0) {

//$update = "update user set U_name='$U_name',S_program='$S_program',S_category='$S_category',S_pa='$S_pa'  where U_id='$id'";


//$query2 = mysqli_query($link, $update) or die(mysqli_error($link));
//if($query2==1)
//{
  $sql="INSERT INTO lecturer (L_id, L_name, L_department, L_researchgroup, L_status) VALUES('$id','$L_name', '$L_department', '$L_researchgroup', '$L_status'  )";
  //$sql = "update student set U_name='$U_name',S_program='$S_program',S_category='$S_category',S_pa='$S_pa'  where U_id='$id'";
  $query3 = mysqli_query($link, $sql) or die(mysqli_error($link));
if($query3==1)
{



  echo "<script>alert('Record Update Successfully')</script>";
  echo "<script>window.open('addLecturer.php','_self')</script>";
}
}
else
{
       echo "<script>alert('Please complete the form')</script>";
}

}




 





?>
<a href="lecturerList.php">Back</a>

</center>
</center>
  <?php include 'footer.php';?>
