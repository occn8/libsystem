<?php

function readlistElement($bookimg, $bookname, $bookbrand, $bookauthor,$booktype, $bookid)
{
    $element = "
    
    <form action=\"readlist.php?action=remove&id=$bookid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border-top rounded py-2 my-4\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                            <a href=\"details.php?book_id=$bookid\"><img src=$bookimg alt=\"Image1\" class=\"img-fluid\"></a>
                            </div>
                            <div class=\"col-md-6\">
                                <h4 class=\"pt-2\"><strong>$bookname</strong></h4>
                                <small class=\"text-secondary\">Author: $bookauthor</small>
                                <h6 class=\"pt-2\">Book Type: <b>$booktype</b></h6>
                                <h6 class=\"pt-2\">Book Brand: <b>$bookbrand</b></h6>
                            </div>
                            <div class=\"qty d-flex col-md-3 py-5\">
                            <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
