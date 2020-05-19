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
    $query = "DELETE FROM posts WHERE id=" . $_GET['delete'];
    mysqli_query ($db, $query);
  }
?>

<!DOCTYPE HTML>
<html>
<head>
  <?php include('server/connection.php'); ?>
  <?php include('getPosts.php'); ?>
  <?php $posts = getPublished(); ?>

  <title>Manage Posts</title>
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
  		<h2>Manage Posts</h2>
      <div class="box">
        <table>
          <tr>
            <th>Post ID</th>
            <th>Post Name</th>
            <th>Post Date</th>
            <th>Delete</th>
          </tr>
          <?php foreach ($posts as $post): ?>
            <tr>
              <td><?php echo $post['id'] ?></td>
              <td><a href="dashSingle.php?idTitlePost=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></td>
              <td><?php echo date("F j, Y "); ?></td>
              <td><a href="managePosts.php?delete=<?php echo $post['id'] ?>">Delete</a></td>
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
  			<a href="<?php echo 'manageUsers.php' ?>">Manage Users</a><br><br>
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
