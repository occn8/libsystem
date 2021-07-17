<?php
require_once('config/configurations.php');
// require_once('widgets/detail.php');
?>

<?php
$currentpage = 'details';
include('widgets/header.php');
?>
<main>
    <?php
    $_SESSION['item_id'] = $_GET['book_id'];
    if (isset($_SESSION['cart'])) {
        $cart_item_id = array_column($_SESSION['cart'], "book_id");
    } else {
    }
    if (isset($_SESSION['wishlist'])) {
        $wishlist_item_id = array_column($_SESSION['wishlist'], "book_id");
    } else {
    }

    foreach ($result as $item) :
        if ($item['book_id'] == $_SESSION['item_id']) :
    ?>
            <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src=" <?php echo $item['book_image'] ?>" alt="product" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                    <form action="details.php" method="post">
                                        <?php if (in_array($_SESSION['item_id'], $wishlist_item_id ?? [])) : ?>
                                            <button type="submit" name="add_wishlist" class="btn btn-secondary form-control" disabled>In your whishlist</button>
                                        <?php elseif (in_array($_SESSION['item_id'], $cart_item_id ?? [])) : ?>
                                            <button type="submit" name="add_wishlist" class="btn btn-secondary form-control" disabled>Add to whishlist</button>
                                        <?php else : ?>
                                            <button type="submit" name="add_wishlist" class="btn btn-secondary form-control">Add to whishlist</button>
                                        <?php endif; ?>
                                        <input type='hidden' name='book_id' value='<?php echo $_SESSION['item_id'] ?>'>
                                    </form>
                                </div>
                                <div class="col">
                                    <form action="details.php" method="post">
                                        <?php if (in_array($_SESSION['item_id'], $cart_item_id ?? [])) : ?>
                                            <button type="submit" name="add" class="btn btn-warning font-size-16 form-control" disabled>In your Cart</button>
                                        <?php else : ?>
                                            <button type="submit" name="add" class="btn btn-warning font-size-16 form-control">Add to Cart</button>
                                        <?php endif; ?>
                                        <input type='hidden' name='book_id' value='<?php echo $_SESSION['item_id'] ?>'>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-5">
                            <h5 class="font-baloo font-size-24"><b><?php echo $item['book_name'] ?></b></h5>
                            <small>by <?php echo $item['book_brand'] ?> </small>
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
                            <hr class="m-0">

                            <table class="my-3">
                                <br>
                                <tr class="font-rale font-size-14">
                                    <td>Deal Price:</td>
                                    <td class="font-size-20 text-danger"> UGX <span><b><?php echo $item['book_author'] ?></b></span>/=<small class="text-muted font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>You Save:</td>
                                    <td><span class="font-size-14 text-danger">UGX 15000/=</span></td>
                                </tr>
                            </table>

                            <div id="policy">
                                <div class="d-flex">
                                    <div class="return text-center mr-5">
                                        <div class=" my-2 color-second">
                                            <span class="bx bx-repost border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="">10 Days <br> Replacement</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="bx bxs-truck border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="">Daily Tuition <br>Delivered</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="bx bx-check-double border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="">1 Year <br>Warranty</a>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small><b>Delivery by : Mar 29 - Apr 1</b></small>
                                <small>Sold by <a href="#"><?php echo $item['book_brand'] ?> </a>(4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                            </div>

                            <div class="col-8">
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo py-2"><b>Color:</b></h6>
                                        <div class="p-2 rounded-circle" style="background-color:#ffd985;"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 rounded-circle" style="background-color:#00315a;"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 rounded-circle" style="background-color:#00a6c6;"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                   

                        </div>

                        <div class="col-12">
                            <h6 class="font-rubik font-size-20"><b>Product Description</b></h6>
                            <hr>
                            <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                            <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                        </div>
                    </div>
                </div>
              
            </section>
    <?php
        endif;
    endforeach;
    ?>
</main>

<?php
include('widgets/footer.php');
?>