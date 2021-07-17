<?php
require_once('config/configurations.php');
require_once('widgets/wishelement.php');
require_once('widgets/checkout_cart.php');

if (isset($_POST['remove_wish'])) {
    if ($_GET['action2'] == 'remove_wish') {
        foreach ($_SESSION['wishlist'] as $key => $value) {
            if ($value["book_id"] == $_GET['id']) {
                unset($_SESSION['wishlist'][$key]);
                echo "<script>window.location = 'wishlist.php'</script>";
            }
        }
    }
}
?>

<?php
$currentpage = 'wishlist';
include('widgets/header.php');
?>

<main>
    <div class="container-fluid">
        <div class="row px-5 py-4">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h4 class="text-center py-3"><b>My Wishlist</b></h4>
                    <?php

                    if (isset($_SESSION['wishlist'])) {
                        $book_id = array_column($_SESSION['wishlist'], 'book_id');

                        $result = $connect->query($querrypdts);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($book_id as $id) {
                                if ($row['book_id'] == $id) {
                                    wishElement($row['book_image'], $row['book_name'], $row['book_brand'], $row['book_author'], $row['book_id']);
                                }
                            }
                        }
                    } else {
                        echo "<center><h5 class=\"text-warning\">No Items in wishlist</h5></center>";
                    }

                    $total = 0;
                    if (isset($_SESSION['cart'])) {
                        $book_id = array_column($_SESSION['cart'], 'book_id');

                        $result = $connect->query($querrypdts);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($book_id as $id) {
                                if ($row['book_id'] == $id) {
                                    $total = $total + (int)$row['book_author'];
                                }
                            }
                        }
                    } else {
                    }

                    ?>

                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                <div class="pt-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-black"><strong>Details of Cart</strong></span>
                        <span class="badge badge-pill"><img src="assets/images/shopping-cart.png" height="30px" alt="">
                            <div class="cart_count ">
                                <?php

                                if (isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-success \">$count</span>";
                                } else {
                                    echo "<span id=\"cart_count\" class=\"text-success\">0</span>";
                                }

                                ?>
                            </div>
                        </span>
                    </h4>
                </div>

            </div>
        </div>
    </div>
    <section></section>
</main>

<?php
include('widgets/footer.php');
?>