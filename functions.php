<?php

    
    define('DBINFO','mysql:host=localhost;dbname=fyp');
    define('DBUSER','root');
    define('DBPASS','');

    function performQuery($query){
        $mysqli = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $mysqli->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function fetchAll($query){
        $mysqli = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $mysqli->query($query);
        return $stmt->fetchAll();
    }

  



?>
