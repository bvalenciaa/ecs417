<?php
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
?>

<!DOCTYPE HTML>
<html>
<head>
  <?php include('server/connection.php'); ?>
  <?php include('getPosts.php'); ?>
  <?php $posts = getPublished(); ?>

  <title>Create Post</title>
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
  		<h2>Create Post</h2>
      <div class="box">
        <form action="create.php" method="post">

          <div class="input-group">
            <label>Title</label><br>
            <input type="text" name="title" id="title" class="text-input">
          </div>

          <div class="input-group">
            <label>Content</label><br>
            <textarea class="text-input" name="body" id="body"></textarea>
          </div>

          <div class="input-group">
            <button type="submit" name="Save" onClick="return isEmpty()">Post</button>
            <button type="reset" name="Clear" class="btn">Clear</button>

          </div>

        </form>
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

  function isEmpty() {
    var x = document.getElementById("title").value;
    var y = document.getElementById("body").value;
    if (x == "") {
        alert("Please enter a subject!");
        event.preventDefault()
    }
    if (y == "") {
        alert("Please enter a description!");
        event.preventDefault()
    }

  }
  </script>

</body>
</html>
