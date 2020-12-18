
<?php include '../header.php';

$a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>

<?php
$link = mysqli_connect("localhost","root","","fyp")or die(mysqli_connect_error());

$edit = $_GET['U_id'];
$select="select * from lecturer where U_id='$edit'";
$run = mysqli_query($link, $select);
$row = mysqli_fetch_array($run);

$U_id = $row["U_id"];
$L_status = $row["L_status"];



?>

<html>
<body>
<form action="lecturerlist.php?U_id=<?php echo $U_id;?>" method="post">
<tr>


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
</tr>

</table>
<input type="submit" name="update" value="update">
</form>
</body>
</html>

<?php
if(isset($_POST['update'])){

$id = $_GET['U_id'];

$status = $_POST['L_status'];

$update = "update lecturer set L_status='$status' where U_id='$id'";

$run_update = mysqli_query($link, $update);

if($run_update)
{
	echo "<script>alert('Record Update Successfully')</script>";
	echo "<script>window.open('lecturerlist.php','_self')</script>";
}
else
{
	echo "<script>alert('Update Failed')</script>";
}
}
?>