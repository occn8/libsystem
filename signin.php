<?php
require_once('config/configurations.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="icon" href="../assets/favicon.ico">
    <title>Fur-Store SignIn</title>
</head>

<body>
   
    <form class="needs-validation form-signin" method="post" action="signin.php" novalidate>
        <?php include('config/errors.php'); ?>
        <center>
            <img class="mb-4" src="favicon.ico" alt="" height="100">
            <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
        </center>
        <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" value="<?php echo $email; ?>" name="email" required autofocus>
            <div class="invalid-feedback">
                Valid Email is required.
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
            <div class="invalid-feedback">
                Valid Password is required.
            </div>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div><br>

        <center>
            <button class="btn btn-lg btn-warning btn-block rounded-pill" name="signin_user" type="submit"><b>Sign in</b></button><br>
            <small>Don't have an a/c </small> <a href="signup.php" class="color-link btn clr-bg rounded-pill font-size-20">Sign up Now</a>
            <p class="mt-5 mb-3 text-muted">&copy; <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </center>
    </form>
    <script src="assets/scripts/validate.js"></script>
    <script src="assets/scripts/jquery.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>
    <script src="assets/scripts/popper.min.js"></script>
</body>

</html>