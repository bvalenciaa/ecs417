<?php

$username = "";
$email    = "";

$db = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname); //connect to database


// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
  header("location: ../index.php");
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') // username and password from form
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1)
  {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    echo("You are now logged in");
    // Password is correct, so start a new session
    session_start();
    // Store data in session variables
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $username;
    header("location: ../dashboard.php");
  }
  else
  {
    echo("Your login is invalid");
  }
}
