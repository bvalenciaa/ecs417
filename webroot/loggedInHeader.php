<?php
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: loginUser.php");
}
?>

<header class="newheader">
  <div class="headerstyle">
    <h1>dashboard</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="allPosts.php">Blog</a>
      <a href="contact.php">Contact</a>
      <a href="portfolio/portfolio.php">Portfolio</a>
    </nav>

    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="index.php?logout='1'">Logout</a></li>
    </ul>
  </div>
</header>

<div class="userStatus">
  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
</div>
