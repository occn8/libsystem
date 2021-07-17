<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ochen Hillary">
    <meta name="description" content="Library project">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="icon" href="assets/favicon.ico">
    <title>Library System</title>
</head>

<body>
    <header class="header">
        <script>
            function lightbg_clr() {
                $('#qu').val("");
                $('#textbox-clr').text("");
                $('#search-layer').css({
                    "width": "auto",
                    "height": "auto"
                });
                $('#livesearch').css({
                    "display": "none"
                });
                $("#qu").focus();
            };

            function fx(str) {
                var s1 = document.getElementById("qu").value;
                var xmlhttp;
                if (str.length == 0) {
                    document.getElementById("livesearch").innerHTML = "";
                    document.getElementById("livesearch").style.border = "0px";
                    document.getElementById("search-layer").style.width = "auto";
                    document.getElementById("search-layer").style.height = "auto";
                    document.getElementById("livesearch").style.display = "block";
                    $('#textbox-clr').text("");
                    return;
                }
                if (window.XMLHttpRequest) { 
                    xmlhttp = new XMLHttpRequest();
                } else { 
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
                        document.getElementById("search-layer").style.width = "100%";
                        document.getElementById("search-layer").style.height = "100%";
                        document.getElementById("livesearch").style.display = "block";
                        $('#textbox-clr').text("X");
                    }
                }
                xmlhttp.open("GET", "config/call_ajax.php?n=" + s1, true);
                xmlhttp.send();
            }
        </script>
        <nav class="navbar navbar-expand-md navbar-light bg-light main-menu" style="box-shadow:none;">
            <div class="container px-2">

                <button type="button" id="sidebarCollapse" class="btn btn-link d-block d-md-none">
                    <i class="bx bx-menu icon-single color-primary"></i>
                </button>

                <a class="navbar-brand" href="index.php">
                    <h4 class="font-weight-bold">Library System</h4>
                </a>

                <ul class="navbar-nav ml-auto d-block d-md-none">
                    <li class="nav-item">
                        <div class="cart">
                            <div class="cart_container clr-bg d-flex flex-row align-items-center justify-content-end">
                                <a href="cart.php" class="btn rounded-pill">
                                    <div class="cart_icon"> <img src="assets/images/shopping-cart.png" height="30px" width="50px" alt="">
                                        <div class="cart_count ">
                                            <?php

                                            if (isset($_SESSION['readlist'])) {
                                                $count = count($_SESSION['readlist']);
                                                echo "<span id=\"cart_count\" class=\"text-success \">$count</span>";
                                            } else {
                                                echo "<span id=\"cart_count\" class=\"text-success\">0</span>";
                                            }

                                            ?>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </li>
                </ul>

                <div class="collapse navbar-collapse">
                    <div class="cont my-2 my-lg-0 mx-auto">
                        <form class="form-inline my-2 my-lg-0 mx-auto" action="search.php" method="get">
                            <input class="form-control" type="text" onKeyUp="fx(this.value)" autocomplete="off" name="qu" id="qu" tabindex="1" placeholder="Search for Book..." aria-label="Search">
                            <div id="livesearch"></div>
                        </form>
                    </div>

                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <div class="cart">
                                <div class="cart_container clr-bg d-flex flex-row align-items-center justify-content-end">
                                    <a href="readlist.php" class="btn rounded-pill">
                                    <div class="cart_icon"> <img src="assets/images/favorite-heart.png" height="25px" width="60px" alt="">
                                            <div class="cart_count ">
                                                <?php

                                                if (isset($_SESSION['readlist'])) {
                                                    $count = count($_SESSION['readlist']);
                                                    echo "<span id=\"cart_count\" class=\"text-success \">$count</span>";
                                                } else {
                                                    echo "<span id=\"cart_count\" class=\"text-success\">0</span>";
                                                }

                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </li>
                        
                        <?php
                        if (!isset($_SESSION['username'])) {
                            echo "<li class=\"nav-item ml-md-3\">
                            <a class=\"btn btn-primary login-up\" href=\"signin.php\"><i class=\"bx bxs-user-circle mr-1 bx-sm\"></i> Log In /
                                Register</a>
                                </li>";
                        } else {
                            echo " <li class=\"nav-item ml-md-3\">
                                <a class=\"btn clr-bg nav-link\" href=\"index.php?logout='1'\"><i class=\"bx bxs-user-circle color-primary mr-1 bx-sm\"></i>(" . $_SESSION['username'] . ") <b><span class='color-primary'>Logout</span></b></a>
                                </li>";
                        }
                        ?>

                    </ul>
                </div>

            </div>
        </nav>

        <nav class="navbar navbar-expand-md navbar-light bg-light sub-menu">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item <?php echo $currentpage == 'index' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'index' ? '#' : 'index.php' ?>">Home</a>
                        </li>
                        <li class="nav-item <?php echo $currentpage == 'collection' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'collection' ? '#' : 'collection.php' ?>">Collection</a>
                        </li>
                        <li class="nav-item <?php echo $currentpage == 'latest' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'latest' ? '#' : 'latest.php' ?>">New Arrivals</a>
                        </li>
                        <li class="nav-item <?php echo $currentpage == 'about' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'about' ? '#' : 'about.php' ?>"> About</a>

                        </li>
                        <li class="nav-item <?php echo $currentpage == 'contact' ? 'active' : '' ?>">
                            <a class="nav-link" href="<?php echo $currentpage == 'contact' ? '#' : 'contact.php' ?>">Contact</a>
                        </li>
                        <?php if (isset($_SESSION['username'])) : ?>
                            <li class="nav-item <?php echo $currentpage == 'account' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?php echo $currentpage == 'account' ? '#' : 'account.php' ?>">Account</a>
                            </li>
                        <?php endif; ?>
                        <?php if (isset($_SESSION['username']) && $_SESSION['username']=="admin") : ?>
                            <li class="nav-item <?php echo $currentpage == 'admin' ? 'active' : '' ?>">
                                <a class="nav-link" href="<?php echo $currentpage == 'admin' ? '#' : 'admin.php' ?>">Admin panel</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-10 pl-0">
                            <?php
                            if (!isset($_SESSION['username'])) {
                                echo " <a class=\"btn btn-primary login-up\" href=\"signin.php\"><i class=\"bx bxs-user-circle mr-1 bx-sm\"></i> Log In /
                                Register</a>";
                            } else {
                                echo "<a class=\"btn btn-primary nav-link\" href=\"index.php?logout='1'\"><i class=\"bx bxs-user-circle mr-1 bx-sm\"></i>(" . $_SESSION['username'] . ") <b>Logout</b></a>";
                            }
                            ?>
                            <!-- <a class="btn btn-primary" href="signin.php"><i class="bx bxs-user-circle mr-1"></i> Log In</a> -->
                        </div>

                        <div class="col-2 text-left">
                            <button type="button" id="sidebarCollapseX" class="btn btn-link">
                                <i class="bx bx-x icon-single"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="list-unstyled components links">
                <li class=" <?php echo $currentpage == 'index' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'index' ? '#' : 'index.php' ?>"><i class="bx bx-home mr-3"></i> Home</a>
                </li>
                <li class=" <?php echo $currentpage == 'collection' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'collection' ? '#' : 'collection.php' ?>"><i class="bx bx-carousel mr-3"></i> Collection</a>
                </li>
                <li class=" <?php echo $currentpage == 'latest' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'latest' ? '#' : 'latest.php' ?>"><i class="bx bx-book-open mr-3"></i> New Arrivals</a>
                </li>
                <li class=" <?php echo $currentpage == 'about' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'about' ? '#' : 'about.php' ?>"><i class="bx bx-help-circle mr-3"></i> About Us</a>
                </li>
                <li class=" <?php echo $currentpage == 'contact' ? 'active' : '' ?>">
                    <a href="<?php echo $currentpage == 'contact' ? '#' : 'contact.php' ?>"><i class="bx bx-phone mr-3"></i> Contact Us</a>
                </li>
            </ul>

            <h6 class="text-uppercase mb-1"><b>Categories</b></h6>
            <ul class="list-unstyled components mb-3">
                <li class="lnk">
                    <a href="index.php#armchairs">Armchairs</a>
                </li>
                <li>
                    <a href="index.php#chaiselongues">Chaise longues</a>
                </li>
                <li>
                    <a href="index.php#cushions">Cushions</a>
                </li>
                <li>
                    <a href="index.php#daybeds">Daybeds</a>
                </li>
                <li>
                    <a href="index.php#easychairs">Easychairs</a>
                </li>
                <li>
                    <a href="index.php#footstools">Footstools</a>
                </li>
                <li>
                    <a href="index.php#kidssofas">Kidssofas</a>
                </li>
                <li>
                    <a href="index.php#poufs">Poufs</a>
                </li>
                <li>
                    <a href="index.php#smallsofas">Smallsofas</a>
                </li>
                <li>
                    <a href="index.php#sofa">Sofa</a>
                </li>
            </ul>

            <ul class="social-icons">
                <li><a href="#" target="_blank" title=""><i class="bx bxl-github"></i></a></li>
                <li><a href="#" target="_blank" title=""><i class="bx bxl-twitter"></i></a></li>
                <li><a href="#" target="_blank" title=""><i class="bx bxl-facebook"></i></a></li>
                <li><a href="#" target="_blank" title=""><i class="bx bxl-instagram"></i></a></li>
            </ul>

        </nav>
    </header>

    <div id="search-layer" onclick="lightbg_clr()"></div>