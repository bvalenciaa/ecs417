<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "b.valencia@se19.qmul.ac.uk";
  $headers = "From: " .$mailFrom;
  $txt = "You have received an e-mail from " .$name . ".\n\n" . $message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailSend");
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Me!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="blogStyle.css">
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
      <h2>CONTACT</h2>
      <form class="contact" action="contact.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="mail" placeholder="Your Email">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="submit">SEND</button>
      </form>
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
