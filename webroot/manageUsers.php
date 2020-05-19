<?php

  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");

  session_start();

  if(isset($_SESSION['username'])) {
    require_once("loggedInHeader.php");
  }
  else {
    header('location: server/adminRestricted.php');
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginUser.php");
  }

  if (isset($_GET['delete'])) {
    $db = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname); //connect to database
    $query = "DELETE FROM users WHERE id=" . $_GET['delete'];
    mysqli_query ($db, $query);
  }
?>

<!DOCTYPE HTML>
<html>
<head>
  <?php include('server/connection.php'); ?>
  <?php include('getPosts.php'); ?>
  <?php $users = getUsers(); ?>

  <title>Manage Users</title>
  <link rel="stylesheet" href="dashboard.css">
</head>

<body>
  <? if (isset($_SESSION['username'])):
    require_once("loggedInHeader.php");
  ?>
  <? endif; ?>

  <div id="wrapper">

  	<div class="managerContainer">
      <button class="goBack" onclick="goBack()">Go Back</button>
  		<h2>Manage Users</h2>
      <div class="box">
        <table>
          <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Delete</th>
          </tr>
          <?php foreach ($users as $user): ?>
            <tr>
              <td><?php echo $user['id'] ?></td>
              <td><?php echo $user['username'] ?></td>
              <td><?php echo $user['email'] ?></td>
              <td><a href="manageUsers.php?delete=<?php echo $user['id'] ?>">Delete</a></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>
  	</div>

    <div class="menuShorcuts">
      <h2>Shortcuts</h2>
      <div class="menuLinks">
        <a href="<?php echo 'dashboard.php' ?>">Dashboard</a><br><br>
        <a href="<?php echo 'createPost.php' ?>">Create Post</a><br><br>
        <a href="<?php echo 'managePosts.php' ?>">Manage Posts</a><br><br>
  			<a href="<?php echo 'dashAll.php' ?>">View Posts</a><br><br>
  			<a href="<?php echo 'manageUsers.php' ?>">View Users</a><br><br>
      </div>
    </div>
  </div>

  <script>
  function goBack() {
    window.history.back();
  }
  </script>

</body>
</html>
