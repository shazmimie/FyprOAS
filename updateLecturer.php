<?php include 'header.php';

$a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>

<!DOCTYPE html>
<html>
<head>
	 <br><br><br><br><br><br><br><br><br><br><title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<div class="main">
   <br><br><center>
  <h2>Lecturer List:</h2><br><br><br><br>

 <center>
   <body>
   	<tr>
<th colspan="9">
<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="search">
</form>
</th></tr><br>


<table border="1" align="center">
<tr>
	<th>No</th>
	<th>Lecturer Name</th>
	<th>Lecturer ID</th>
	<th> Department</th>
	<th>Status</label>
  <th>Update</th>
    <th>Delete</th>
	
  
</tr>


  <?php
   //SQL query
  $search    = "";

  $search=$_POST['search'];
  $link = mysqli_connect("localhost","root","","fyp");

    $query = "SELECT * FROM lecturer where L_name like '%$search%'; " or die(mysqli_connect_error());
  

    $result = mysqli_query($link, $query);


    //Loop the recordset $rs
  

    while ( $row = $result -> fetch_assoc()) {
    
  
$L_count= $row['L_count'];
$L_name= $row['L_name'];
$L_id = $row['L_id'];
$L_department = $row['L_department'];
$L_status = $row['L_status'];

?>

<form action="updateLecturer.php?L_id=<?php echo $L_id;?>" method="post">
<tr>
  <tr>


<td><?php echo $L_count;?></td>
<td><?php echo $L_name;?></td>
<td><?php echo $L_id;?></td>
<td><?php echo $L_department;?></td>



<td>
<select name="L_status"><option value="Available"
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
</select></td>
<td><input type="submit" name="update" value="update"></td>
<td><input type="submit" name="delete" value="delete"></td>
</tr>
</tr>


</form>


 
       

     <?php }?>

    


 

<?php 
if(isset($_POST['update'])){

$id = $_GET['L_id'];

$status = $_POST['L_status'];

$update = "update lecturer set L_status='$status' where L_id='$id'";

$run_update = mysqli_query($link, $update);

if($run_update)
{
  echo "Lecturer Status Update Successfully";
  echo "<script>window.open('updateLecturer.php','_self')</script>";
}
else
{
  echo "<script>alert('Update Failed')</script>";
}
}
?>

<?php	
if(isset($_POST['delete'])){

$id = $_GET['L_id'];



$query = "DELETE  FROM lecturer  WHERE L_id='$id'  ;";


$result = $link->query($query)or die(mysqli_error($link));

if($result)
{
  
$query2 = "DELETE  FROM user  WHERE U_id='$id'  ;";
  $result2 = $link->query($query2)or die(mysqli_error($link));

if($result2)
{
    

  echo "Lecturer deleted Successfully";
  echo "<script>window.open('updateLecturer.php','_self')</script>";
}
}
}




?>
   

  </table> 
  <a href="lecturerList.php">Back</a>
   </center></center>
</div>



 <?php include 'footer.php'; ?>
</html>
 </head>


