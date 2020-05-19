<?php
  session_start();

  $title = '';
  $body = '';

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginUser.php");
  }

  if (isset($_GET['idTitlePost'])) {
    $db = mysqli_connect('localhost', 'root', '', 'ecs417'); //connect to database
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
  <?php $posts = getPublished(); ?>
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
        <lc>01</lc><a href="index.php" title="Home">Home</a><br><br>
        <lc>02</lc><a href="contact.php" title="Contact">Contact</a><br><br>
        <lc>03</lc><a href="portfolio/portfolio.php" title="Portfolio">Portfolio</a><br><br>
        <lc>04</lc><a href="dashboard.php" title="Dashboard">Dashboard</a><br><br>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="allPosts">
      <h2>All Posts</h2>
      <div class="postsArea">
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <div class="post_info">
                  <h3><?php echo $post['title'] ?></h3>
                  <span><?php echo date("F j, Y "); ?></span>
                  <p><?php echo $post['body'] ?></p>
                </div>
              </a>
            </div>
          <?php endforeach ?>
      </div>
    </div>
  </div>
</body>
</html>
