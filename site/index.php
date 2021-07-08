<?php 

  session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must login";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="css/index.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <title>Library Home</title>
</head>

<body>
    <header class="main-header">
        <nav class="navbar navbar-expand-xl navbar-light" id="site-header">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <img src="favicon.ico" height="50px" alt="">
                    <span class="first-letter">Library Management system</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="allbooks.php">Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="addbook.php">Add-Book</a></li>
                    <li class="nav-item"><a class="nav-link" href="deletebook.php">Delete-Book</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                    <li class="nav-item">
                        <?php  if (isset($_SESSION['username'])) : ?>
                        <a class="nav-link" href="index.php?logout='1'"
                            style="color: rgb(255, 0, 0) !important;">Logout</a>
                        <?php endif ?>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <main role="main">

        <section class="jumbotron text-center"
            style="background-image: url(images/books-2.jpg);background-repeat: no-repeat;background-size: cover; height: 80vh;">
            <div class="container" style="background-color: beige;padding: 10px;">
                <h1>Library Management system</h1>
                
            </div>
        </section>

        <div class="album py-5 " style="background-color:beige;">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm" style="border-radius: 10px;">
                            <img src="images/open-book2.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text"><b>Title:</b> This title text</p>
                                <p class="card-text"><b>Author:</b> Author</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="details.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read</button></a>
                                    <small class="text-muted">Edition: 2</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="images/open-book1.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text"><b>Title:</b> Banker WWII</p>
                                <p class="card-text"><b>Author:</b> war veteran</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="details.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read</button></a>
                                    <small class="text-muted">Edition: 1</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="images/open-book2.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text"><b>Title:</b> Bagamoyo East</p>
                                <p class="card-text"><b>Author:</b> Obote writes</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="details.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read</button></a>
                                    <small class="text-muted">Edition: 1</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="images/open-book1.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text"><b>Title:</b> Uganda Politics</p>
                                <p class="card-text"><b>Author:</b> Sevo besigye</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="details.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read</button></a>
                                    <small class="text-muted">Edition: 4</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="images/open-book2.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text"><b>Title:</b> Perception Rick</p>
                                <p class="card-text"><b>Author:</b> Clinton fool</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="details.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read</button></a>
                                    <small class="text-muted">Edition: 2</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="images/open-book1.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text"><b>Title:</b> Goose creep</p>
                                <p class="card-text"><b>Author:</b> Mporty mot</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="details.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read</button></a>
                                    <small class="text-muted">Edition: 2</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="images/open-book2.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text"><b>Title:</b> Dancehall 90ty musical</p>
                                <p class="card-text"><b>Author:</b> Sheebah quin</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="details.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read</button></a>
                                    <small class="text-muted">Edition: 1</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="images/open-book1.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text"><b>Title:</b> Evnvironment keeper</p>
                                <p class="card-text"><b>Author:</b> Podolski wimp</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="details.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read</button></a>
                                    <small class="text-muted">Edition: 3</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="images/open-book2.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <p class="card-text"><b>Title:</b> States of matter</p>
                                <p class="card-text"><b>Author:</b> Obama jb clamp</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <a href="details.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read</button></a>
                                    <small class="text-muted">Edition: 2</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>About Us</h3>
                    <p>Library Management systemLibrary Management systemLibrary Management systemLibrary Management systemLibrary Management systemLibrary Management system
                           </p>
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
                    <p>Library Management systemLibrary Management systemLibrary Management systemLibrary Management system</p>
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
                            class="icon-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Library Management system</a>
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
