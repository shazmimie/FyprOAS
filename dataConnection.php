<?php
//Connect to the database server.
    //Local
    $link = mysqli_connect("localhost", "root", "", "", "3306");

    //Server
    //$link = mysqli_connect("localhost", "cb17021", "cb17021", "cb17021");

    if (!$link) {
        die('Could not connect: ' . mysqli_connect_error());
    }
?>