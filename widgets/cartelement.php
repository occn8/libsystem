<?php

function cartElement($bookimg, $bookname, $bookbrand, $bookauthor, $bookid)
{
    $element = "
    
    <form action=\"cart.php?action=remove&id=$bookid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border-top rounded py-2 my-4\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                            <a href=\"details.php?book_id=$bookid\"><img src=$bookimg alt=\"Image1\" class=\"img-fluid\"></a>
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\"><strong>$bookname</strong></h5>
                                <small class=\"text-secondary\">Seller: $bookbrand</small>
                                <h5 class=\"pt-2\">UGX <b>$bookauthor</b>/=</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"qty d-flex col-md-3 py-5\">
                                <div class=\"btn-bx\">
                                    <button type=\"button\" class=\"qty-down btn bg-light border rounded-circle\" data-id=\"pdt$bookid\"><i class=\"bx bx-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"qty_input btn bg-light w-25 d-inline text-center p-2\" disabled data-id=\"pdt$bookid\">
                                    <button type=\"button\" class=\"qty-up btn bg-light border rounded-circle\" data-id=\"pdt$bookid\"><i class=\"bx bx-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
