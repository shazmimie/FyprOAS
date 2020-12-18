<?php
	 
define("DBNAME", "fyp");
$mysqli = mysqli_connect("localhost", "root", "", "", "3306");
if (!$mysqli) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    mysqli_select_db($link, DBNAME) or die(mysqli_error($link));
	
	if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

	// variable declaration
	$U_id = "";
	$role    = "";
	$errors = array(); 
	$_SESSION['success'] = "";


function performQuery($query){
	$mysqli = NEW MySQLi ('localhost','root','','fyp');
	$stmt= $mysqli->query($query);
	return $stmt ->fetchAll();
}

?>