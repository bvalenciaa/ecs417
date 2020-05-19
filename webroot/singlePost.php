<?php

  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");

  session_start();

  $title = '';
  $body = '';

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

<!DOCTYPE html>
<html>
<head>
	<title>Post | Blanca Valencia</title>
	<link rel="stylesheet" type="text/css" href="blogStyle.css">
  <?php require_once('server/connection.php') ?>
  <?php require_once('getPosts.php') ?>
</head>
<body>
  <header>
    <div class="blogTitle">Blanca's Blog</div>
  </header>
  <div class="sideContent">
    <div class="sideBar">
      <div class="sidebarPic"></div>
      <div class="desc">Welcome to my blog, where I'll post about events, news and interests of mine.</div>
      <div class="sidebarTitle">Blanca Valencia</div>

      <div class="links">
        <lc>01</lc><a href="allPosts.php" title="Posts">All Posts</a><br><br>
        <lc>02</lc><a href="contact.php" title="Contact">Contact</a><br><br>
        <lc>03</lc><a href="portfolio/portfolio.php" title="Portfolio">Portfolio</a><br><br>
        <lc>04</lc><a href="dashboard.php" title="Dashboard">Dashboard</a><br><br>
      </div>
    </div>
  </div>

  <div class="content">
    <h2><?php echo $post['title'] ?></h2>
    <div class="postsArea">
      <span><?php echo date("F j, Y "); ?></span><br>
      <p><?php echo $post['body'] ?></p><br>
		</div>
  </div>
</body>
</html>
