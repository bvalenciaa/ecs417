<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");

// Creates connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname); //connect to database

// Checks connection
if (!$conn)
{
 die("Connection failed: " . mysqli_connect_error());
}

?>
