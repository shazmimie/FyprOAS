
<?php include 'header.php';

$a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>
  <!-- Breadcrumbs-->
   
    <!DOCTYPE html>
<html>
<head>
  <br><br><br><br><br><br><br><br><br><br><title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<div class="container">
   
   <body><br><br>
<center>
<h2>Your Profile:</h2><br><br><br><br>
    <center>

<table border="0" align="center">

<table>
   <?php
   //SQL query

  $link = mysqli_connect("localhost","root","","fyp");
  

     $query = " SELECT * from coordinator WHERE coordinator.U_id= '$a' ;"  or die(mysqli_connect_error());
    $result = mysqli_query($link, $query);


    //Loop the recordset $rs
  

    while ( $row = $result -> fetch_assoc()) {
        
  
$U_name= $row['U_name'];
$U_id= $row['U_id'];


?>
<form action="updateCProfile.php?U_id=<?php echo $U_id;?>" method="post">


<table>
<tr>
<td>Name:</td>
<td><input type="text" name="U_name" value="<?php echo $U_name;?>"></td>
</tr>
<tr>
<td>Student ID:</td>
<td><?php echo $U_id;?></td>
</tr>

 

  </div>
   <td><input type="submit" name="update" value="update"></td>
  </form>
</table>  
    <?php }?>

    <?php
if(isset($_POST['update'])){

$id = $_GET['U_id'];
$U_name = $_POST['U_name'];



$update = "update coordinator set U_name='$U_name' where U_id='$id'";


$query2 = mysqli_query($link, $update) or die(mysqli_error($link));
if($query2)
{
  

  echo "<script>alert('Record Update Successfully')</script>";
  echo "<script>window.open('coordinatorProfile.php','_self')</script>";
}
else
{
  echo "<script>alert('Update Failed')</script>";
}
}











?>
	<?php include 'footer.php';?>
