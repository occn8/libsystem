<?php
require_once('config/configurations.php');
?>

<?php
$currentpage = 'details';
include('widgets/header.php');
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
            <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src=" <?php echo $item['book_image'] ?>" alt="product" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">

                                <div class="col">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form action="details.php" method="post">
                                                <?php if (in_array($_SESSION['item_id'], $cart_item_id ?? [])) : ?>
                                                    <button type="submit" name="add" class="btn btn-secondary font-size-16 form-control" disabled>Already In your Reading List</button>
                                                <?php else : ?>
                                                    <button type="submit" name="add" class="btn btn-secondary font-size-16 form-control">Add to Reading List</button>
                                                <?php endif; ?>
                                                <input type='hidden' name='book_id' value='<?php echo $_SESSION['item_id'] ?>'>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="details.php" method="post">
                                                <a href="reader.php?book_id=<?php echo $_SESSION['item_id'] ?>" class="color-black">
                                                    <div type="submit" name="open" class="btn btn-warning font-size-20 form-control"><b>Read Now</b></div>
                                                </a>
                                                <input type='hidden' name='book_id' value='<?php echo $_SESSION['item_id'] ?>'>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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
                            <hr class="m-0">

                            <table class="my-1">
                                <br>
                                <tr class="font-rale font-size-14">
                                    <td>Book Type:</td>
                                    <td class="font-size-20 text-black"> <span><b><?php echo $item['book_type'] ?></b></span></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Book Brand:</td>
                                    <td class="font-size-20 text-black"> <span><b><?php echo $item['book_brand'] ?></b></span></td>
                                </tr>
                            </table>
                            <div class="col-12 pt-5">
                                <h6 class="font-rubik font-size-20"><b>Book Description</b></h6>
                                <hr>
                                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                            </div>
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