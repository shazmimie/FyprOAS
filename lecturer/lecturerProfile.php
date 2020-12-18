
<?php include '../header.php';
$a = $_SESSION['U_id'];?>
<?php CheckRole('Lecturer') ?>
  
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
  <?php

  
   //SQL query
    $query = "SELECT * FROM lecturer where L_id = '$a'; " or die(mysqli_connect_error());
 
    $result = mysqli_query($link, $query);

    //Loop the recordset $rs
    echo "<table border='1'>";

    while ($row = mysqli_fetch_array($result)) {
        echo '

  	
    <table border="1">
        <tr>
            <td>Name:</td>
            <td>'
               
           . $row["L_name"].
                
            '</td>
        </tr>
		<tr>
            <td>Lecturer ID:</td>
            <td>'
               
           . $row["L_id"].
                
            '</td>
        </tr>
        <tr>
            <td>Department:</td>
            <td>'
               
           . $row["L_department"].
                
            '</td>
        </tr>
		<tr>
            <td>Research Group:</td>
            <td>'
               
           . $row["L_researchgroup"].
                
            '</td>
        </tr>
		               
                
        ';   
     }
    echo "</table>";
	?>
	<?php include '../footer.php';?>
  




	
	

