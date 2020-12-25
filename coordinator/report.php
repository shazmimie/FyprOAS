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
<h2>Report:</h2><br><br><br><br>
  	<center>

<table border="1" align="center">
<tr>
 
	<th >Lecturer Name</th>
	<th>Student Name</th>
	<th>Student ID</th>
	<th> Category</th>
	
	

	
</tr>

  <?php
   //SQL query

     $query = " SELECT application.L_id, application.L_name, GROUP_CONCAT(DISTINCT application.U_id separator '<br><br>') AS 'U_id', GROUP_CONCAT(DISTINCT student.U_name separator '<br><br>')as 'U_name' , GROUP_CONCAT(application.S_category separator '<br><br>') AS 'S_category' FROM application INNER JOIN student ON application.U_id=student.U_id GROUP BY application.L_id ASC  ;"  or die(mysqli_connect_error());
    $result = mysqli_query($link, $query);

    


    //Loop the recordset $rs
  
while ( $row = $result -> fetch_assoc()) {
        echo '
  	
    
        <tr>
         
          <td>'
               
           . $row["L_name"].
                
            '</td>
           
            <td>'
               
           . $row["U_name"].
                
            '</td>
       
           
            <td>'
               
           . $row["U_id"].
                
            '</td>
        
           
            <td>'
               
           . $row["S_category"].
                
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


