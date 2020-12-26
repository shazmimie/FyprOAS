<?php include 'constants.php';?>
<?php include('server.php') ?>
<?php 

$a = $_SESSION['U_id'];?>
 <?php if (IsInRole('Student')) { ?>

  <!-- Breadcrumbs-->
   
    <!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
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
  

     $query = " SELECT user.U_name, user.U_id, user.S_program, user.S_category, user.S_pa, application.L_name, application.A_title FROM user LEFT JOIN application ON user.U_id = application.U_id WHERE user.U_id= '$a' ;"  or die(mysqli_connect_error());
    $result = mysqli_query($link, $query);


    //Loop the recordset $rs
  

    while ( $row = $result -> fetch_assoc()) {
        
  
$U_name= $row['U_name'];
$U_id= $row['U_id'];
$S_program = $row['S_program'];
$S_category = $row['S_category'];
$S_pa = $row['S_pa'];
$L_name = $row['L_name'];
$A_title = $row['A_title'];

?>
<form action="updateStdProfile.php?U_id=<?php echo $U_id;?>" method="post">


<table>
<tr>
<td>Name:</td>
<td><input type="text" name="U_name" value="<?php echo $U_name;?>"></td>
</tr>
<tr>
<td>Student ID:</td>
<td><?php echo $U_id;?></td>
</tr>
<tr><td>Program:</td>
  <td><select name="S_program"><option value="SOFTWARE"
<?php
if($S_program =='SOFTWARE'){
  echo "selected";
}
?>
>SOFTWARE</option>
<option value="GRAPHIC"
<?php
if($S_program =='GRAPHIC'){
  echo "selected"; 
}
?>
>GRAPHIC</option>
<option value="NETWORK"
<?php
if($S_program =='NETWORK'){
  echo "selected"; 
}
?>
>NETWORK</option>
<option value="SCIENCE COMPUTER"
<?php
if($S_program =='SCIENCE COMPUTER'){
  echo "selected"; 
}
?>
>SCIENCE COMPUTER</option>
</select></td></tr>

<tr><td>Category:</td>
  <td><select name="S_category"><option value="PTA1"
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
<option value="FYP1"
<?php
if($S_category =='FYP1'){
  echo "selected"; 
}
?>
>FYP1</option>
<option value="FYP2"
<?php
if($S_category ==' FYP2'){
  echo "selected"; 
}
?>
>FYP2</option>
</select></td></tr>
<tr>
<td>Academic Advisor:</td>
<td><input type="text" name="S_pa" value="<?php echo $S_pa;?>"></td>
</tr>
<tr>
<td>Supervisor:</td>
<td><?php echo $L_name;?></td>
</tr>
<tr>
<td>FYP Title:</td>
<td><?php echo $A_title;?></td>
</tr>
 

  </div>
   <td><input type="submit" name="update" value="update"></td>
  </form>
</table>  
    <?php }?>
<?php } ?>
    <?php
if(isset($_POST['update'])){

$id = $_GET['U_id'];
$U_name = $_POST['U_name'];
$S_program = $_POST['S_program'];
$S_category = $_POST['S_category'];
$S_pa = $_POST['S_pa'];


$update = "update user set U_name='$U_name',S_program='$S_program',S_category='$S_category',S_pa='$S_pa'  where U_id='$id'";


$query2 = mysqli_query($link, $update) or die(mysqli_error($link));
if($query2==1)
{
  $sql="INSERT INTO student (U_id, U_name, S_program, S_category, S_pa) VALUES('$id','$U_name', '$S_program', '$S_category', '$S_pa'  )";
  //$sql = "update student set U_name='$U_name',S_program='$S_program',S_category='$S_category',S_pa='$S_pa'  where U_id='$id'";
  $query3 = mysqli_query($link, $sql) or die(mysqli_error($link));
if($query3==1)
{



  echo "<script>alert('Record Update Successfully')</script>";
  echo "<script>window.open('index.php','_self')</script>";
}
else
{
  echo "<script>alert('Update Failed')</script>";
}
}
}


 





?>


