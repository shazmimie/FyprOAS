

<?php
   //we need session for the log in thingy XD 
   
  include '../header.php';
 include("function.php");
   $L_id = $_GET['L_id'];
   $a = $_SESSION['U_id'];?>

 <?php CheckRole('Coordinator') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending Request System in PHP and MySql</title>

    <!-- Bootstrap core CSS -->
   

  </head>
<link rel="stylesheet" type="text/css" href="../style.css">
<div class="main">
 
   
   <body><br><br>
<center>
<h2>Allocation:</h2><br><br><br><br>
    <center>
      <?php
$link = NEW MySQLi ('localhost','root','','fyp');
//$link = NEW MySQLi ("localhost","root","","fyp");

$resultSet = $link -> query("SELECT  * FROM student where student.L_name='' ;");

//$result = $link->query($resultSet);
    if($resultSet){
       //$row = mysqli_fetch_assoc($result);
        //$row = mysqli_fetch_assoc($result);
  //while ( $row = $result -> fetch_assoc()) {
//while($row = mysqli_fetch_array($result)){
        //$U_id = $row ['U_id'];
        //$U_name = $row ['U_name'];
}
?>
<form method="post" action="addstd.php">
<tr><td>STUDENT :</td>
                    <td><select id="U_id" name="U_id">
               <?php

                //while ( $row = $query -> fetch_assoc())
                while ( $row = $resultSet -> fetch_assoc()) {

  //$A_idsvnumber = $_GET ['A_idsvnumber'];
 //$Lname = $_GET ['L_name'];

    
           $U_id = $_row ['U_id'];
           $U_name = $_row ['U_name'];
echo '<option value="' . $row['U_id']. '">' . $row['U_id'] . '</option>';
  echo $row['S_category'];  }
 //echo "</select>";

?>

</select></td>




  
  <button  type="submit" class="btn" name="addstd" href="addstd.php?U_id=<?php echo $row['U_id'] ?>">Submit</button>
          
             
       
<?php

$select = "SELECT * FROM lecturer where L_id='$L_id' ";
$run = mysqli_query($link, $select);
while($row = mysqli_fetch_array($run)){


$L_id = $row['L_id'];
$L_name= $row['L_name'];

}
//$resultSets = $mysqli -> query ("SELECT * FROM lecturer where L_id='$id' ");
//$result2 = $mysqli->query($resultSets);
    //if($result2){
        //$row = mysqli_fetch_assoc($result2);
        //$L_id = $_row ['L_id'];
           //$L_name = $_row ['L_name'];
//}
?>


<td><input type="text" name="L_id" id="L_id" readonly value="<?php echo $L_id;?>"></td>

<td><input type="text" name="L_name" id="L_name" readonly value="<?php echo $L_name;?>"></td>







        </tr></form><br><br>



<table border="0" align="center">
<tr>
  <th> Supervisor</th>
    <th>Student Name</th>
   <th> Student ID</th>
    <th>Category</th>

  
  
  
  

  
</tr>
   

   

      <section class="jumbotron text-center">
        <div class="container">
            <?php
              $query = "SELECT application.L_id, application.L_name, application.S_category , application.U_id, student.U_name from application  join student on application.U_id=student.U_id where application.L_id='$L_id'  ";
                //$query = "select * from requests2 order by L_id ASC ";
   

                //if(count(fetchAll($query))>0){
                    //foreach(fetchAll($query) as $row){
              $result = mysqli_query($link, $query);


    //Loop the recordset $rs
  

    while ( $row = $result -> fetch_assoc()) {
                       $L_id = $row['L_id'];
                         $L_name = $row['L_name'];



                        ?>

                <tr>





                  <td><p class="lead text-muted"><?php echo $row['L_name'] ?></p></td>
                  
                     <td><p class="lead text-muted"><?php echo $row['U_name'] ?></p></td>
                      <td><p class="lead text-muted"><?php echo $row['U_id'] ?></p></td>
                        <td><p class="lead text-muted"><?php echo $row['S_category'] ?></p></td>
                         
                        
                        
                     </tr>
                     
            <?php
                    }
                
            ?>

       
</div>
      </section>
    </table>
    </center>
    </center>

    </div>
                       <?php include '../sidebar.php' ;?>
 <?php include '../footer.php'; ?> 


 
  </body>
</html>


