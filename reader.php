<?php
require_once('config/configurations.php');
?>

<?php
$currentpage = 'reader';
// include('widgets/header.php');

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ochen Hillary">
    <meta name="description" content="Library project">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="icon" href="assets/favicon.ico">
    <title>Library System</title>
</head>

<main>
    <?php
    $_SESSION['item_id'] = $_GET['book_id'];
    if (isset($_SESSION['readlist'])) {
        $cart_item_id = array_column($_SESSION['readlist'], "book_id");
    } else {
    }

    foreach ($result as $item) :
        if ($item['book_id'] == $_SESSION['item_id']) :
    ?>
            <section id="product" class="py-0">
                
                <iframe src="assets/books/sample.pdf" width="100%vw" height="100%vh"></iframe>

            </section>
    <?php
        endif;
    endforeach;
    ?>
</main>

 <?php
// include('widgets/footer.php');
?>