<?php

function sluitVerbinding($connection) {
    mysqli_close($connection);
}

function maakVerbinding() {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $databasename = "nerdygadgets";
    $connection = mysqli_connect($host, $user, $pass, $databasename);
    return $connection;
}

function alleKlantenOpvragen() {
    $connection = maakVerbinding();
    $klanten = selecteerKlanten($connection);
    sluitVerbinding($connection);
    return $klanten;
}

function selecteerKlanten($connection) {
    $sql = "SELECT voornaam, woonplaats FROM klant ORDER BY voornaam";
    $result = mysqli_fetch_all(mysqli_query($connection, $sql),MYSQLI_ASSOC);
    return $result;
}
function generateCouponCode() {
    // Start the coupon code with the prefix "NERDYG"
    $couponCode = "NERDYG";

    // Generate a random alphanumeric string to add to the coupon code
    // This string will be 6 characters long
    $couponCode .= substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);

    // Return the generated coupon code
    return $couponCode;
}