<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME"); 

$title = "";
$body  = "";
$publish = 1;

$db = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname); //connect to database

if ($_SERVER['REQUEST_METHOD'] == 'POST') // content from form
{
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $body = mysqli_real_escape_string($db, $_POST['body']);

  if (empty($title)) { echo("Title is required"); }
  if (empty($body)) { echo("Body is required"); }

  $query = "INSERT INTO posts (user_id, title, body, published) VALUES(1, '$title', '$body', $publish)";
  mysqli_query($db, $query);
}

header("Location: dashboard.php");
exit();

?>
