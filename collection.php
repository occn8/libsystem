<?php
require_once('config/configurations.php');
require_once('widgets/component.php');
?>

<?php
$currentpage = 'collection';
include('widgets/header.php');
?>

<main>
    <section id="collection">
        <div class="container py-5 ctn">
            <h4 class="text-center py-1"><b>Our Book Collection</b></h4>
            <div id="filters" class="button-group border-bottom text-center font-baloo font-size-16">
                <button class="btn color-primary coll-btn is-checked" data-filter="*"><b>All Furniture</b></button>
                <button class="btn coll-btn" data-filter=".primary">Primary</button>
                <button class="btn coll-btn" data-filter=".highschool">High-school</button>
                <button class="btn coll-btn" data-filter=".university">University</button>
                <button class="btn coll-btn" data-filter=".action">Action & Adventure</button>
                <button class="btn coll-btn" data-filter=".classics">Classics</button>
                <button class="btn coll-btn" data-filter=".fantasy">Fantasy</button>
                <button class="btn coll-btn" data-filter=".fiction">Fiction</button>
                <button class="btn coll-btn" data-filter=".stories">Short-Stories</button>
            </div>

            <div class="grid py-2">
                <?php
                $result = $connect->query($querrybooks);
                while ($row = mysqli_fetch_assoc($result)) {
                    component2($row['book_name'], $row['book_type'], $row['book_author'], $row['book_image'], $row['book_id']);
                }
                ?>

            </div>
        </div>
    </section>
</main>

<?php
include('widgets/footer.php');
?>