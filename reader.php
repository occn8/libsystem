<?php
require_once('config/configurations.php');
?>

<?php
$currentpage = 'reader';
// include('widgets/header.php');
?>

<main>
    <?php
    $_SESSION['item_id'] = $_GET['book_id'];
    if (isset($_SESSION['readlist'])) {
        $cart_item_id = array_column($_SESSION['readlist'], "book_id");
    } else {
    }
    if (isset($_SESSION['wishlist'])) {
        $wishlist_item_id = array_column($_SESSION['wishlist'], "book_id");
    } else {
    }

    foreach ($result as $item) :
        if ($item['book_id'] == $_SESSION['item_id']) :
    ?>
            <section id="product" class="py-0">
                
                <iframe src="assets/sample.pdf" width="100%" height="625vh"></iframe>

            </section>
    <?php
        endif;
    endforeach;
    ?>
</main>

<!-- <?php
include('widgets/footer.php');
?> -->