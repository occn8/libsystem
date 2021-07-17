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
                <!-- <div class="container">
                    <div class="row">

                        <div class="col-md-6 py-5">
                            <h5 class="font-baloo font-size-24">Title: <b><?php echo $item['book_name'] ?></b></h5>
                            <small>by: <b><?php echo $item['book_author'] ?></b> </small>
                            <br><br>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                    <span><i class="bx bx-star"></i></span>
                                </div>
                                <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | Rate</a>
                            </div>
                        </div>
                        <div class="col-md-6 py-5">
                            <h6 class="font-baloo font-size-18">Book Type: <b><?php echo $item['book_type'] ?></b></h6>
                            <h6 class="font-baloo font-size-18">Book Brand: <b><?php echo $item['book_brand'] ?></b></h6>
                        </div>

                        <div class="col-12 pt-5 box">
                            <h6 class="font-rubik font-size-20"><b>Book Description</b></h6>
                            <hr>
                            <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                            <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                            
                            
                        </div>

                    </div>
                </div> -->
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