<?php
require_once('config/configurations.php');
require_once('widgets/component.php');
?>

<?php
$currentpage = 'latest';
include('widgets/header.php');
?>

<main>
<div class="py-2"></div>
    <section id="latest" class="custom-sale">
        <div class="container py-3">
            <h4 class="text-center"><b>Our latest Additions</b></h4>
            <div class="owl-carousel owl-theme">
                <?php
                $result = $connect->query($querrylatest);
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