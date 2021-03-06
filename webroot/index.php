<?php
  session_start();

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginUser.php");
  }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Home | Blanca Valencia</title>
	<link rel="stylesheet" type="text/css" href="blogStyle.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic" rel="stylesheet" type="text/css">

  <?php require_once('server/connection.php') ?>
  <?php require_once('getPosts.php') ?>
  <?php $posts = getPublished(); ?>
</head>
<body>
  <div id="pageContainer">
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
      <h2>Recent Posts</h2>
      <div class="allPosts">
        <?php foreach ($posts as $post): ?>
          <div class="post">
            <h3><?php echo $post['title'] ?></h3>
            <span><?php echo date("F j, Y "); ?></span><br>
            <a href="singlePost.php?idTitlePost=<?php echo $post['id'] ?>">read post</a>
        	</div>
        <?php endforeach ?>
      </div>
    </div>

    <div id="footer">
      <div class="pager">
        LAST UPDATED: <span id="date"></span>
        <span style="float:right">
          <a target="_blank" href="mailto:b.valencia@se19.qmul.ac.uk">Email</a>&nbsp;//&nbsp;
          <a target="_blank" href="https://www.linkedin.com/in/blanca-valencia-4792bb194/">LinkedIn</a>&nbsp;//&nbsp;
          <a target="_blank" href="https://www.qmul.ac.uk/">QMUL</a>
        </span>
      </div> <!-- END of PAGER -->
    </div> <!-- END of FOOTER -->
  </div>

  <script>
    document.getElementById("date").innerHTML = document.lastModified;
  </script>
</body>
</html>
