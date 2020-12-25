
<?php include '../header.php';
$a = $_SESSION['U_id'];?>
<?php CheckRole ('Coordinator') ?>
  
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
    $query = "SELECT * FROM coordinator where U_id = '$a'; " or die(mysqli_connect_error());

    $result = mysqli_query($link, $query);

    //Loop the recordset $rs
    echo "<table border='1'>";

    while ($row = mysqli_fetch_array($result)) {
        echo '
  
  	
    <table border="1">
        <tr>
            <td>Name:</td>
            <td>'
               
           . $row["U_name"].
                
            '</td>
        </tr>
		<tr>
            <td>Coordinator ID:</td>
            <td>'
               
           . $row["U_id"].
                
            '</td>
        </tr>
        
		               
                   
        ';   
     }
    echo "</table>";
	?>
    <a href="../index.php">Back</a>
<a href="updateCProfile.php?U_id=<?php echo $a;?>">Edit</a>
	<?php include '../footer.php';?>
  




	
	

