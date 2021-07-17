<?php
$uid = $_SESSION['id'];

$querryuser = "SELECT * FROM users WHERE id='$uid'";
$results = mysqli_query($connect, $querryuser);
if ($results->num_rows > 0) {
    $row = mysqli_fetch_assoc($results);

    $firstname = $row['fname'];
    $lastname = $row['lname'];
    $username = $row['username'];
    $email = $row['email'];
    $address = $row['address'];
    $country = $row['country'];
    $district = $row['district'];
    $zip = $row['zip'];
} else {
}

$querrypay = "SELECT * FROM payments WHERE userid='$uid'";
$results2 = mysqli_query($connect, $querrypay);
if ($results2->num_rows > 0) {
    $row2 = mysqli_fetch_assoc($results2);

    $method = $row2['method'];
    $cname = $row2['cname'];
    $cnum = $row2['cnum'];
    $exp = $row2['expiration'];
    $cvv = $row2['cvv'];
} else {
}
