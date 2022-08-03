<?php

    $dbhost		= "LAPTOP-5R93J9J2";
    $dbuser		= "sa";
    $dbpasswd	= "123456";
    $dbname		= "work1";
    include("mssql.php");
    $db_tm = new sql_db($dbhost, $dbuser, $dbpasswd, $dbname, false);
    
?>