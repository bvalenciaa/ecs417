<?php

$title = "";
$body  = "";
$publish = 1;

$db = mysqli_connect('localhost', 'root', '', 'ecs417'); //connect to database

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
