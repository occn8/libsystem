<?php
require_once('config/configurations.php');
require_once('widgets/component.php');
?>

<?php
$currentpage = 'index';
include('widgets/header.php');
?>

<main>
    <section class="jumbotron text-center" style="background-image: url(assets/images/books-2.jpg);background-repeat: no-repeat;background-size: cover; height: 70vh;">
        <div class="container" style="background-color: beige;padding: 10px;">
            <h1>Library Management system</h1>
        </div>
    </section>
    <div class="pt-2"></div>

    <section id="primary" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Primary School Books</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrybooks);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>

    <section id="highschool" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>High school Books</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryhighschool);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="banner_adds">
        <div class="container py-5 text-center">
            <img src="assets/images/4.jpg" alt="banner1" class="img-fluid">
            <img src="assets/images/5.jpg" alt="banner1" class="img-fluid">
        </div>
    </section>
    <section id="university" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>University Books</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrybooks);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="action" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Action & Adventure Books</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryaction);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="classics" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Classics Books</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryclassics);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="banner_adds">
        <div class="container py-2 text-center">
            <img src="assets/images/2.jpg" alt="banner1" class="img-fluid">
            <img src="assets/images/3.jpg" alt="banner1" class="img-fluid">
        </div>
    </section>
    <section id="fantasy" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Fantasy Books</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrybooks);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="fiction" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Fiction Books</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrybooks);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="stories" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Short Stories Books</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrystories);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>


</main>

<?php
include('widgets/footer.php');
?>