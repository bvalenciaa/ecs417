<?php

  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");

  session_start();

  $title = '';
  $body = '';

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

  if (isset($_GET['idTitlePost'])) {
    $db = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname); //connect to database
    $query = "SELECT * FROM posts WHERE id=" . $_GET['idTitlePost'];
    $result = mysqli_query($db, $query);
    $post = mysqli_fetch_assoc($result);
  }
?>

<!DOCTYPE HTML>
<html>
<head>
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic" rel="stylesheet" type="text/css">

  <?php include('server/connection.php'); ?>
  <?php include('getPosts.php'); ?>
  <?php $posts = getPublished(); ?>

  <title>Post Manager</title>
  <link rel="stylesheet" href="dashboard.css">
</head>

<body>
  <? if (isset($_SESSION['username'])):
    require_once("loggedInHeader.php");
  ?>
  <? endif; ?>

  <div id="container">
    <div id="wrapper">

    	<div class="managerContainer">
    		<h2>Welcome</h2>
        <div class="newnavi">
          <div class="menuLinks">
            <a href="createPost.php">Create Post</a>
            <a href="managePosts.php">Manage Posts</a>
          </div>
        </div>
    		<div class="managerContent">
          <p><?php echo $post['title'] ?></p><br>
          <span><?php echo date("F j, Y "); ?></span><br>
          <p><?php echo $post['body'] ?></p><br>
    		</div>
    	</div>

      <div class="menuShorcuts">
        <h2>Shortcuts</h2>
        <div class="menuLinks">
          <a href="<?php echo 'dashboard.php' ?>">Dashboard</a><br><br>
          <a href="<?php echo 'createPost.php' ?>">Create Post</a><br><br>
          <a href="<?php echo 'managePosts.php' ?>">Manage Posts</a><br><br>
    			<a href="<?php echo 'allPosts.php' ?>">View Posts</a><br><br>
    			<a href="<?php echo 'manageUsers.php' ?>">Manage Users</a><br><br>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
