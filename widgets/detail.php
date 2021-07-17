<?php

function detail($book_name, $book_brand, $book_author, $book_image, $book_id)
{
    $element = "
    
    <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <img src=\" $book_image\" alt=\"product\" class=\"img-fluid\">
                            <div class=\"form-row pt-4 font-size-16 font-baloo\">
                                <form action=\"details.php\" method=\"post\">
                                    <div class=\"col\">
                                        <button type=\"submit\" name=\"add_wishlist\" class=\"btn btn-secondary form-control\">Add to whishlist</button>
                                        <input type='hidden' name='book_id' value='$book_id'>
                                    </div>
                                    <div class=\"col\">
                                            <button type=\"submit\" name=\"add\" class=\"btn btn-warning font-size-16 form-control\">Add to Cart</button>
                                            <input type='hidden' name='book_id' value='$book_id'>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-md-6 py-5\">
                            <h5 class=\"font-baloo font-size-24\"><b>$book_name</b></h5>
                            <small>by $book_brand </small>
                            <div class=\"d-flex\">
                                <div class=\"rating text-warning font-size-12\">
                                    <span><i class=\"bx bx-star\"></i></span>
                                    <span><i class=\"bx bx-star\"></i></span>
                                    <span><i class=\"bx bx-star\"></i></span>
                                    <span><i class=\"bx bx-star\"></i></span>
                                    <span><i class=\"bx bx-star\"></i></span>
                                </div>
                                <a href=\"#\" class=\"px-2 font-rale font-size-14\">20,534 ratings | Rate</a>
                            </div>
                            <hr class=\"m-0\">

                            <table class=\"my-3\">
                            <br>
                                <tr class=\"font-rale font-size-14\">
                                    <td>Deal author:</td>
                                    <td class=\"font-size-20 text-danger\"> UGX <span><b>$book_author</b></span>/=<small class=\"text-muted font-size-12\">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                </tr>
                                <tr class=\"font-rale font-size-14\">
                                    <td>You Save:</td>
                                    <td><span class=\"font-size-14 text-danger\">UGX 15000/=</span></td>
                                </tr>
                            </table>

                            <div id=\"policy\">
                                <div class=\"d-flex\">
                                    <div class=\"return text-center mr-5\">
                                        <div class=\" my-2 color-second\">
                                            <span class=\"bx bx-repost border p-3 rounded-pill\"></span>
                                        </div>
                                        <a href=\"#\" class=\"\">10 Days <br> Replacement</a>
                                    </div>
                                    <div class=\"return text-center mr-5\">
                                        <div class=\"font-size-20 my-2 color-second\">
                                            <span class=\"bx bxs-truck  border p-3 rounded-pill\"></span>
                                        </div>
                                        <a href=\"#\" class=\"\">Daily Tuition <br>Delivered</a>
                                    </div>
                                    <div class=\"return text-center mr-5\">
                                        <div class=\"font-size-20 my-2 color-second\">
                                            <span class=\"bx bx-check-double border p-3 rounded-pill\"></span>
                                        </div>
                                        <a href=\"#\" class=\"\">1 Year <br>Warranty</a>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div id=\"order-details\" class=\"font-rale d-flex flex-column text-dark\">
                                <small><b>Delivery by : Mar 29 - Apr 1</b></small>
                                <small>Sold by <a href=\"#\">$book_brand </a>(4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class=\"fas fa-map-marker-alt color-primary\"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                            </div>

                                <div class=\"col-8\">
                                    <div class=\"color my-3\">
                                        <div class=\"d-flex justify-content-between\">
                                            <h6 class=\"font-baloo py-2\"><b>Color:</b></h6>
                                            <div class=\"p-2 rounded-circle\" style=\"background-color:#ffd985;\"><button class=\"btn font-size-14\"></button></div>
                                            <div class=\"p-2 rounded-circle\" style=\"background-color:#00315a;\"><button class=\"btn font-size-14\"></button></div>
                                            <div class=\"p-2 rounded-circle\" style=\"background-color:#00a6c6;\"><button class=\"btn font-size-14\"></button></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                 <div class=\"col-8\">
                                         <div class=\"qty d-flex\">
                                             <h6 class=\"font-baloo py-2\"><b>Quantity:</b></h6>
                                             <div class=\"px-4 d-flex font-rale btn-bx\">
                                                 <button data-id=\"pdt\" class=\"qty-down btn bg-light border rounded-circle\"><i class=\"bx bx-minus\"></i></button>
                                                 <input type=\"text\" data-id=\"pdt\" class=\"qty_input w-25 text-center d-inline mx-2\" disabled value=\"1\" placeholder=\"1\">
                                                 <button class=\"qty-up btn bg-light border rounded-circle\" data-id=\"pdt\"><i class=\"bx bx-plus\"></i></button>
                                             </div>
                                         </div>
                                     </div>


                        </div>

                        <div class=\"col-12\">
                            <h6 class=\"font-rubik font-size-20\"><b>Product Description</b></h6>
                            <hr>
                            <p class=\"font-rale font-size-14\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                            <p class=\"font-rale font-size-14\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                        </div>
                    </div>
                </div>
    ";
    echo $element;
}
