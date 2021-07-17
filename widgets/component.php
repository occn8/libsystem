<?php

function component($bookname, $bookauthor, $bookimg, $bookid)
{
    $element = "
    
    <div class=\" py-2\">
                <form action=\"index.php\" method=\"post\">
                <div class=\"item py-2\">
                <div class=\"book \">
                    <a href=\"details.php?book_id=$bookid\"><img src=\"$bookimg\" alt=\"book1\" class=\"img-fluid\"></a>
                    <br>
                    <div class=\"text-center\">
                        <h6>$bookname</h6>
                        <div class=\"rating text-warning font-size-12\">
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"far fa-star\"></i></span>
                        </div>
                        <div class=\"author py-2\">
                            <span>
                            Author: <b>$bookauthor</b></span>
                        </div>
                        <button type=\"submit\" class=\"btn btn-warning\" name=\"detail-link\"><a href=\"details.php?book_id=$bookid\" class=\"color-black\">View Book</a></button>
                        <input type='hidden' name='book_id' value='$bookid'>
                    </div> 
                </div>
                </div>
                </form>
            </div>
    ";
    echo $element;
}

function component2($bookname, $booktype, $bookauthor, $bookimg, $bookid)
{
    $element = "
    
    <div class=\" py-2\">
                <form action=\"index.php\" method=\"post\">
                <div class=\"grid-item $booktype\">
                <div class=\"item py-2\" style=\"width: 200px;\">
                <div class=\"book \">
                    <a href=\"details.php?book_id=$bookid\"><img src=\"$bookimg\" alt=\"book1\" class=\"img-fluid\"></a>
                    <div class=\"text-center\">
                        <h6>$bookname</h6>
                        <div class=\"rating text-warning font-size-12\">
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"far fa-star\"></i></span>
                        </div>
                        <div class=\"author py-2\">
                            <span>Author: <b>$bookauthor</b></span>
                        </div>
                        <button type=\"submit\" class=\"btn btn-warning\" name=\"detail-link\"><a href=\"details.php?book_id=$bookid\" class=\"color-black\">View Book</a></button>
                        <input type='hidden' name='book_id' value='$bookid'>
                    </div> 
                </div>
                </div>
                </div>
                </form>
            </div>
    ";
    echo $element;
}

function component3($bookname, $bookbrand, $bookauthor, $bookimg, $bookid)
{
    $element = "
    
    <div class=\" py-2\">
                <form action=\"index.php\" method=\"post\">
                <div class=\"grid-item $bookbrand\">
                <div class=\"item py-2\" style=\"width: 200px;\">
                <div class=\"book \">
                    <a href=\"details.php?book_id=$bookid\"><img src=\"$bookimg\" alt=\"book1\" class=\"img-fluid\"></a>
                    <div class=\"text-center\">
                        <h6>$bookname</h6>
                        <div class=\"rating text-warning font-size-12\">
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"fas fa-star\"></i></span>
                            <span><i class=\"far fa-star\"></i></span>
                        </div>
                        <div class=\"author py-2\">
                            <span>Author: <b>$bookauthor</b></span>
                        </div>
                        <button type=\"submit\" class=\"btn btn-warning\" name=\"detail-link\"><a href=\"details.php?book_id=$bookid\" class=\"color-black\">View Book</a></button>
                        <input type='hidden' name='book_id' value='$bookid'>
                    </div> 
                </div>
                </div>
                </div>
                </form>
            </div>
    ";
    echo $element;
}

