<?php

include "./header.php";
include "cartfuncties.php";

$cart = getCart();
$id = $_GET["id"];

foreach($cart as $index => $value){

    $cart = unset($cart[$id]);
}


?>