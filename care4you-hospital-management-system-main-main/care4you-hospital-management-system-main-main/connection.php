<?php

    $database= new mysqli("localhost","root","","sql_database_c4u");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
