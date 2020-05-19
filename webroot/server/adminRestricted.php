<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page Restricted!</title>

  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html {
    font-size: 10px;
    font-family: "Lato", Arial, sans-serif;
  }

  h1 {
    font-size: 5rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: 3px solid #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 5rem 10rem;
  }

  section {
    width: 100%;
    height: 100vh;
    color: #fff;
    background: linear-gradient(-45deg, #f19e9c, #d7f0ea, #f19e9c, #99cdc9);
    background-size: 400% 400%;
    position: relative;
    animation: animate 10s ease-in-out infinite;
  }

  @keyframes animate {
    0% {
      background-position: 0 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0 50%;
    }

  }

  .button {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin-top: 45px;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 2px;
    background-color: Transparent;
  }
  </style>
</head>

<body>
  <section>
    <h1>Oh no!</h1>
    <button class="button" onclick="redirect()">Please log in first!</button>
    <script>
    function redirect()
    {
      location.replace("../loginUser.php")
    }
    </script>
  </section>

</body>
