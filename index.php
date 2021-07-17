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

    <section id="armchairs" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Armchairs</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryarmchairs);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>

    <section id="chaiselongues" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Chaise longues</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrychaiselongues);
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
    <section id="cushions" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Cushions</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrycushions);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="daybeds" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Daybeds</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrydaybeds);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="easychairs" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Easy chairs</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryEasychairs);
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
    <section id="footstools" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Footstools</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryFootstools);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="kidssofas" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Kidssofas</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryKidssofas);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="poufs" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Poufs</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querryPoufs);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="smallsofas" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Small sofas</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrySmallsofas);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['book_name'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>
            </div>
        </div>
    </section>
    <section id="banner_adds">
        <div class="container py-5 text-center">
            <img src="assets/images/banner1.jpg" alt="banner1" class="img-fluid">
            <img src="assets/images/banner2.jpg" alt="banner1" class="img-fluid">
        </div>
    </section>
    <section id="sofa" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Sofa</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrySofa);
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