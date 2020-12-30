<?php include 'header.php';

$a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>

<!DOCTYPE html>
<html>
<head>
   <br><br><br><br><br><br><br><br><br><br><title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<div class="container">
   
   <body><br><br>
<center>


    <h2>PTA 2 List:</h2><br><br><br><br>
    <center>

<table border="1" align="center">
<tr>
    <th>Student Name</th>
  <th>Student ID</th>
  <th> FYP Title</th>
  <th>Supervisor</th>
  <th>Category</th>
  <th>Edit Category</th>
  <th>Update</th>
  <th>Delete</th>
</tr>
  <?php
   //SQL query

    $sql = " SELECT student.U_name, student.U_id, student.S_category, application.A_title, application.L_name FROM student LEFT JOIN application ON student.U_id = application.U_id WHERE student.S_category ='PTA2'  ;"  or die(mysqli_connect_error());
    $results = mysqli_query($link, $sql);
    //Loop the recordset $rs
  

    while ( $row = $results -> fetch_assoc()) {
        
  
$U_id= $row['U_id'];
$U_name= $row['U_name'];
$S_category = $row['S_category'];
$A_title = $row['A_title'];
$L_name = $row['L_name'];


?>


  <tr>
<form action="pta2.php?U_id=<?php echo $U_id;?>" method="post">
               
                     <td><p class="lead text-muted"><?php echo $row['U_name'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['U_id'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['A_title'] ?></p></td>
                   <td><p class="lead text-muted"><?php echo $row['L_name'] ?></p></td>
                     <td><p class="lead text-muted"><?php echo $row['S_category']?></p></td>
                     <td>
<select name="S_category"><option value="PTA1"
<?php
if($S_category =='PTA1'){
  echo "selected";
}
?>
>PTA1</option>
<option value="PTA2"
<?php
if($S_category =='PTA2'){
  echo "selected"; 
}
?>
>PTA2</option>
</select></td>
 <div class="input-group">
               
            <td><button type="submit"  class="btn" name="update">Update</button></td>
               <td><button type="submit"  class="btn" name="delete">Delete</button></td>
        </div></form> </tr> 




<?php
}
?>

<?php
if(isset($_POST['update'])){

$id = $_GET['U_id'];
$S_category = mysqli_real_escape_string($link, $_POST['S_category']);


$query = "UPDATE student SET S_category='$S_category' WHERE U_id='$id'  ;";


$result = $link->query($query)or die(mysqli_error($link));

if($result)
{
  
$query2 = "UPDATE user SET S_category='$S_category' WHERE U_id='$id'  ;";
  $result2 = $link->query($query2)or die(mysqli_error($link));

if($result2)
{
    
$query3 = "UPDATE application SET S_category='$S_category' WHERE U_id='$id'  ;";
  $result3 = $link->query($query3)or die(mysqli_error($link));

if($result3)
{
  echo "Lecturer Status Update Successfully";
  echo "<script>window.open('pta2.php','_self')</script>";
}
}
}


else
{
  echo "<script>alert('Update Failed')</script>";
}
}
?>

<?php
if(isset($_POST['delete'])){

$id = $_GET['U_id'];



$query = "DELETE FROM student  WHERE U_id='$id'  ;";


$result = $link->query($query)or die(mysqli_error($link));

if($result)
{
  
$query2 = "DELETE FROM user  WHERE U_id='$id'  ;";
  $result2 = $link->query($query2)or die(mysqli_error($link));

if($result2)
{
    
$query3 = "DELETE FROM application  WHERE U_id='$id'  ;";
  $result3 = $link->query($query3)or die(mysqli_error($link));

if($result3)
{
  echo "Lecturer Status Update Successfully";
  echo "<script>window.open('fyp2.php','_self')</script>";
}
}
}


else
{
  echo "<script>alert('Update Failed')</script>";
}
}
?>
</table>

 <a href="studentList.php">Back</a>
</center>
  </div>


 <?php include 'footer.php'; ?>
</html>
 </head>


