<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="formStyle.css">
</head>
<body>
  <div class="header">
  	<h4>Login</h4>
  </div>

  <div class="box">
    <form method="post" action="server/login.php">
      <fieldset>
        <label>Username:</label>
        <input type="text" name="username" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit" class="btn" name="login">Login</button>

        <p>
          Don't have an account? <a href="registerUser.php">Register</a>
        </p>
      </fieldset>
    </form>
  </div>

  <div id="footer">
    <div class="pager">
      LAST UPDATED: 04/05/20
      <span style="float:right">
        <a target="_blank" href="mailto:b.valencia@se19.qmul.ac.uk">Email</a>&nbsp;//&nbsp;
        <a target="_blank" href="https://www.linkedin.com/in/blanca-valencia-4792bb194/">LinkedIn</a>&nbsp;//&nbsp;
        <a target="_blank" href="https://www.qmul.ac.uk/">QMUL</a>
      </span>
    </div> <!-- END of PAGER -->
  </div> <!-- END of FOOTER -->
</body>
</html>
