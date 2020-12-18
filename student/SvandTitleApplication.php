<?php include('functions.php') ?>
<?php include '../header.php';



 //we need session for the log in thingy XD 

$a = $_SESSION['U_id'];

?>

 <?php CheckRole('Student') ?>

<?php
$mysqli = new PDO(DBINFO,DBUSER,DBPASS);

$resultSet = $mysqli -> query ("SELECT L_name, A_idsvnumber FROM lecturer ");

?>

	<br><br><br><br><br>
	<center><h1><b><font size = "6"> SV and Title Application</font></b></h1></center>
<link rel="stylesheet" type="text/css" href="../style.css">

		<br>
		<br><br><br>
		<center>
		
		
	  <br><br><br><br><br><div id="container">
<table>
				<form method="post" action="SvandTitleApplication.php">
				
				
					<tr><td>FYP SUPERVISOR  :</td>
					<td><select L_name="lecturer" >
				<?php
				while ( $rows = $resultSet -> fetch_assoc())
	{
        $A_idsvnumber = $rows ['A_idsvnumber'];
		$L_name = $rows ['L_name'];
		echo "<option value='$L_name'>$L_name </option>";
	}
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
	 


	// variable declaration
	$U_id = "";
	$role    = "";
	$errors = array(); 
	$_SESSION['success'] = "";


        if(isset($_POST['reg_svtitle'])){
            $A_idsvnumber = $_POST['A_idsvnumber'];
            $A_title = $_POST['A_title'];
            $A_objective = $_POST['A_objective'];
            $A_scope = $_POST['A_scope'];
            $A_field = $_POST['A_field'];
            $A_software = $_POST['A_software'];
            $A_tools = $_POST['A_tools'];
            $A_technique = $_POST['A_technique'];
            $message = "$U_id would like to request an account.";
            $query = "INSERT INTO `application` (`U_id`, `A_idsvnumber`, `A_title`, `A_objective`, `A_scope`, `A_field`, `A_software`, `A_tools`, `A_technique`, `message`, `date`) VALUES (NULL, '$U_id', '$A_idsvnumber', '$A_title', '$A_objective', '$A_scope', '$A_field', '$A_software', '$A_tools', '$A_technique', '$message', CURRENT_TIMESTAMP) ";
            if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
        }

    
    ?>

    




	
<?php include '../footer.php';?>