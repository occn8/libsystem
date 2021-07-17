<?php
require_once('config/configurations.php');
require_once('widgets/readlistelement.php');

if (isset($_POST['remove'])) {
    if ($_GET['action'] == 'remove') {
        foreach ($_SESSION['readlist'] as $key => $value) {
            if ($value["book_id"] == $_GET['id']) {
                unset($_SESSION['readlist'][$key]);
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}
?>

<?php
$currentpage = 'readlist';
include('widgets/header.php');
?>

<main>
    <div class="container-fluid">
        <div class="row px-5 py-4">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h4 class="text-center py-3"><b>My Reading List</b></h4>

                    <?php

                    $total = 0;
                    if (isset($_SESSION['readlist'])) {
                        $book_id = array_column($_SESSION['readlist'], 'book_id');
                        $book_qty = array_column($_SESSION['readlist'], 'book_qty');

                        $result = $connect->query($querrypdts);
                        while ($row = mysqli_fetch_assoc($result)) {
                            foreach ($book_id as $id) {
                                if ($row['book_id'] == $id) {
                                    readlistElement($row['book_image'], $row['book_name'], $row['book_brand'], $row['book_author'], $row['book_id']);
                                    $total = $total + (int)$row['book_author'];
                                }
                            }
                        }
                    } else {
                        echo "<center><h5 class=\"text-warning\">Your Reading List is Empty</h5></center>";
                    }

                    ?>

                </div>
            </div>
            
        </div>
    </div>
    <section></section>
</main>

<?php
include('widgets/footer.php');
?>