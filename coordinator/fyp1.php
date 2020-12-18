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

    <h2>FYP1 List:</h2><br><br><br><br>
    <center>

<table border="0" align="center">
<tr>
  <th>Student Name</th>
  <th>Student ID</th>
  <th> Category</th>
  <th>FYP Title</th>
  <th>Supervisor</th>
  
</tr>

  <?php
   //SQL query
 $query = " SELECT student.U_name, student.U_id, student.S_category,  application.A_title, application.L_name FROM student LEFT JOIN application ON student.U_id = application.U_id WHERE student.S_category ='FYP1'  ;"  or die(mysqli_connect_error());
    $result = mysqli_query($link, $query);

  


    //Loop the recordset $rs
  

   while ( $row = $result -> fetch_assoc()) {
        echo '
  
    
        <tr>
           
            <td>'
               
           . $row["U_name"].
                
            '</td>
       
           
            <td>'
               
           . $row["U_id"].
                
            '</td>
        
           
            <td>'
               
           . $row["S_category"].
                
            '</td>
        
   
        
            <td>'
               
           . $row["A_title"].
                
            '</td>
              <td>'
               
           . $row["L_name"].
                
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


