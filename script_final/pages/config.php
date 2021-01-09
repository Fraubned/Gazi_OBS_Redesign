<?php

$host = "localhost";
$port = "5432";
$dbname = "script";
$user = "postgres";
$password = "123"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
 
// Check connection
if($dbconn === false){
    die("ERROR: Could not connect. " . pg_last_error());
}
?>