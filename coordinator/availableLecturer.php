<?php include '../header.php';

$a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
<div class="container">
   
   <body><br><br>
<center>
 
  	<h2>Available Lecturer :</h2><br><br><br><br>
  	<center>

<table border="0" align="center">
<tr>
	<th>Lecturer Name</th>
	<th>Lecturer ID</th>
	<th> Department</th>

	
</tr>

  <?php
   //SQL query

   $query = " SELECT * from lecturer  WHERE L_status='Available'  ;"  or die(mysqli_connect_error());
    $result = mysqli_query($link, $query);



    //Loop the recordset $rs
  

    while ( $row = $result -> fetch_assoc()) {
        echo '
 
    
        <tr>
           
            <td>'
               
           . $row["L_name"].
                
            '</td>
       
           
            <td>'
               
           . $row["U_id"].
                
            '</td>
        
           
            <td>'
               
           . $row["L_department"].
                
            '</td>
        
   
        
          
      
		
          
        </tr>           
        ';   
     }

  
	?>
</table>
</center>
  </div>

<?php include '../sidebar.php' ;?>
 <?php include '../footer.php'; ?>
</html>
 </head>


