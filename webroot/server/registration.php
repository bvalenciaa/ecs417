<?php

$username = "";
$email = "";
$password = "";

$db = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname); //connect to database


if ($_SERVER['REQUEST_METHOD'] == 'POST') // username and password from form
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) { echo("Username is required"); }
  if (empty($email)) { echo("Email is required"); }
  if (empty($password)) { echo("Password is required"); }


  $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
  mysqli_query($db, $query);
  header("location: ../dashboard.php");

}
