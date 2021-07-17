<?php
require_once('config/configurations.php');
require_once('widgets/component.php');
?>

<?php
$currentpage = 'index';
include('widgets/header.php');
?>

<main>
    <div class="py-2"></div>

    <section id="primary" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Primary</b></h4>
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
            <h4 class="text-center"><b>High school</b></h4>
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
            <h4 class="text-center"><b>University</b></h4>
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
            <h4 class="text-center"><b>Action & Adventure</b></h4>
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
            <h4 class="text-center"><b>Classics</b></h4>
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
            <h4 class="text-center"><b>Fantasy</b></h4>
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
            <h4 class="text-center"><b>Fiction</b></h4>
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
            <h4 class="text-center"><b>Short Stories</b></h4>
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