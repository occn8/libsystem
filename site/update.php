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
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <title>Update Book</title>
</head>

<body>
    <header class="main-header">
        <nav class="navbar navbar-expand-xl navbar-light" id="site-header">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">
                <img src="favicon.ico" height="50px" alt="">
                    <span class="first-letter">Kabooja Library</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="allbooks.php">Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="addbook.php">Add-Book</a></li>
                    <li class="nav-item"><a class="nav-link" href="deletebook.php">Delete-Book</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                </ul>
            </div>
        </nav>
    </header>
    
 <main>
    <section class="padd">
    <p>Kabojja International School is a private co-educational school offering a British 
                            curriculum IGCSE (International General Certificate of Secondary Education) and GCE (General Certificate of Education). 
                            It is both a Day and Barding School.</p><br>
<center>
                <div class="">
                <h1><b>Edit Book Author</b></h1>
                <form action="update.php" method="post">
                <?php include('errors.php'); ?>
                <label for="id" class="white">Book ID</label>
                    <input type="text" name="id" id="id" class="mb-3"><br>
                    <label for="author" class="white">Current Author</label>
                    <input type="text" name="author" id="author" class="mb-3"><br>
                    <label for="new" class="white">New Author</label>
                    <input type="text" name="new" id="new" class="mb-3"><br>
                    <button type="submit" class="btn btn-warning col-md-4 yellow" name="editbook">Update Author</button>
                </form><br>
            </div><br>
            </center>
    </section>
</main>

    <footer class="site-footer">
        <div class="container"><br><br>
            <div class="row">
                <div class="col-lg-4">
                    <h3>About Us</h3>
                    <p>Kabojja International School is a private co-educational school offering a British 
                            curriculum IGCSE (International General Certificate of Secondary Education) and GCE (General Certificate of Education). 
                            It is both a Day and Barding School!</p>
                </div>
                <div class="col-lg-3 mx-auto">
                    <h3>Navigation</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Staff portal</a></li>
                        <li><a href="#">Student portal</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3>Subscribe</h3>
                    <p>Kabojja International School is a private co-educational school offering a British 
                            curriculum IGCSE.It is both a Day and Barding School!</p>
                    <form action="#" class="form-subscribe">
                        <input type="email" class="form-control mb-3" placeholder="Enter Email">
                        <input type="submit" class="btn btn-warning yellow" value="Subscribe">
                    </form>
                </div>
            </div>

            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        Copyright &copy;</script>
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | <i
                            class="icon-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Kabooja Boys
                            School</a>
                    </p>
                </div>

            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>