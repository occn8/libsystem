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
    <title>Sign Up</title>
</head>

<body>

    <form method="post" action="signup.php" class="form-signin bg-white">
        <center>
            <h3 class="mb-5" style="color:red;">Register</h3>
        </center>
        <h1 class="h3 mb-3 font-weight-normal">Library Management system</h1>
            <?php include('errors.php'); ?>
            <div class="">
                
                <div class="form-group">
                        <label for="c_fname" class="text-black">Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_fname" name="username" placeholder="Username" value="<?php echo $username; ?>"required>
                        <div class="invalid-feedback">
                </div>

                <div class="form-group ">
                        <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="c_email" name="email" placeholder="Email" value="" required>
                </div>

                <div class="form-group">
                        <label for="c_pass" class="text-black">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="c_pass" name="password_1" placeholder="Password" value="" required>
                </div>

                <div class="form-group">
                        <label for="c_repass" class="text-black">Re-type Password <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="c_repass" name="password_2" placeholder="Password" value="" required>
                </div>

                <center>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <input type="submit" class="btn btn-warning btn-block yellow" name="register" value="Register">
                        </div>
                    </div>
                    <small>Already a User?</small> <a href="login.php" style="color:red;">Log In</a>
                </center>

                

            </div>
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>
