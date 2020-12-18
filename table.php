
<?php
//First, connect to the MySQL server.

include 'selectDB.php';

//Then, create a database named �mydatabase�.
$sql = "CREATE TABLE user (
  U_num INT NOT NULL AUTO_INCREMENT,
	U_id  VARCHAR(100),
	U_name  VARCHAR(100),
	U_password  VARCHAR(100),
	role VARCHAR(100),
	gender VARCHAR(100),
    PRIMARY KEY(id))";
	
	if (mysqli_query($link, $sql)) {
    echo "Table User created successfully\n";
} else {
    echo 'Error creating table: ' . mysqli_error($link) . "\n";
}

//And finally we close the connection to the MySQL server
mysqli_close($link);
?>
