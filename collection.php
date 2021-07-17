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
                <button class="btn coll-btn" data-filter=".armchairs">Armchairs</button>
                <button class="btn coll-btn" data-filter=".chaiselongues">Chaiselongues</button>
                <button class="btn coll-btn" data-filter=".cushions">Cushions</button>
                <button class="btn coll-btn" data-filter=".daybeds">Daybeds</button>
                <button class="btn coll-btn" data-filter=".easychairs">Easychairs</button>
                <button class="btn coll-btn" data-filter=".footstools">Footstools</button>
                <button class="btn coll-btn" data-filter=".kidssofas">Kidssofas</button>
                <button class="btn coll-btn" data-filter=".poufs">Poufs</button>
                <button class="btn coll-btn" data-filter=".smallsofas">Smallsofas</button>
                <button class="btn coll-btn" data-filter=".sofa">Sofa</button>
            </div>

            <div class="grid py-2">
                <?php
                $result = $connect->query($querrypdts);
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