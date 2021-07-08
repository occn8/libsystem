<?php include('../config/server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link href="css/signin.css" rel="stylesheet">
  <link rel="icon" href="favicon.ico">
  <title>Log In</title>
</head>

<body>

  <form class="form-signin" method="post" action="login.php">
    <?php include('errors.php'); ?>
    <center>
      <img class="mb-4" src="favicon.ico" alt=""  height="100">
      <h1 class="h3 mb-3 font-weight-normal" style="color:red;">Sign In</h1>
    </center>
    
    <h1 class="h3 mb-3 font-weight-normal">Library Management system</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required
      autofocus><br>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-warning btn-block yellow" name="login" type="submit">Sign in</button><br>

    <center>
    <small>Not yet a User?</small> <a href="signup.php" style="color:red;">Sign up</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </center>
  </form>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/popper.min.js"></script>
</body>

</html>
