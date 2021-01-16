
<?php include 'header.php';

$a = $_SESSION['U_id'];?>

 <?php CheckRole('Student') ?>
  <!-- Breadcrumbs-->
   
    <!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
<div class="container">
   
   <body><br><br>
<center>
<br><br><br><br><br><br><br><br><br><br><h2>Your Profile:</h2><br><br><br><br>
    <center>

<table border="0" align="center">

<table>
   
  <?php
 
   //SQL query
    $query = " SELECT user.U_name, user.U_id,user.email, user.S_program,user.S_category, user.S_pa, application.L_name, application.A_title FROM user LEFT JOIN application ON user.U_id = application.U_id WHERE user.U_id= '$a' ;"  or die(mysqli_connect_error());
    $result = mysqli_query($link, $query);




    //Loop the recordset $rs
    echo "<table border='1'>";
 while ( $row = $result -> fetch_assoc())
     {
        echo '
  
  	
    <table border="1">
        <tr>
             <td>Name:</td>
            <td>'
               
           . $row["U_name"].
                
            '</td>
        </tr>
		<tr>
          <td>Student ID:</td>
            <td>'
                
           . $row["U_id"].
                
            '</td>
        </tr>
        <tr>
          <td>Email:</td>
            <td>'
                
           . $row["email"].
                
            '</td>
        </tr>
        <tr>
            <td>Program:</td>
            <td>'
               
           . $row["S_program"].
                
            '</td>
        </tr>
         <tr>
            <td>Category:</td>
            <td>'
               
           . $row["S_category"].
                
            '</td>
        </tr>
		<tr>
          <td>Academic Advisor:</td>
            <td>'
               
           . $row["S_pa"].
                
            '</td>
        </tr>
        <tr>
           <td>Supervisor:</td>
            <td>'
               
           . $row["L_name"].
                
            '</td>
        </tr>
        <tr>
           <td>FYP Title:</td>
            <td>'
               
           . $row["A_title"].
                
            '</td>
        </tr>
		               
                  
        ';   
     }

    echo "</table>";

	?>
  <a href="index.php">Back</a>
<a href="updateStdProfile.php?U_id=<?php echo $a;?>">Edit</a>
  </div>

	<?php include 'footer.php';?>
