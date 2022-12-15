<?php

                               // altijd hiermee starten als je gebruik wilt maken van sessiegegevens

function getCart()
{
    if (isset($_SESSION['cart'])) {               //controleren of winkelmandje (=cart) al bestaat
        $cart = $_SESSION['cart'];                  //zo ja:  ophalen
    } else {
        $cart = array();                            //zo nee: dan een nieuwe (nog lege) array
    }
    return $cart;                               // resulterend winkelmandje terug naar aanroeper functie
}

function saveCart($cart)
{
    $_SESSION["cart"] = $cart;                  // werk de "gedeelde" $_SESSION["cart"] bij met de meegestuurde gegevens
}

function addProductToCart($stockItemID)
{
    $cart = getCart();                          // eerst de huidige cart ophalen

    if (array_key_exists($stockItemID, $cart)) {  //controleren of $stockItemID(=key!) al in array staat
        $cart[$stockItemID] += 1;                   //zo ja:  aantal met 1 verhogen
    } else {
        $cart[$stockItemID] = 1;                    //zo nee: key toevoegen en aantal op 1 zetten.
    }

    saveCart($cart);                            // werk de "gedeelde" $_SESSION["cart"] bij met de bijgewerkte cart
}

function space(){
    $var = "&nbsp;";
    for($x=0;$x<=150;$x++){
        print($var);
    }
    return $var;


}

function korting(){

    if (!isset($_SESSION['action_count'])) {

        $_SESSION['action_count'] = 0;
    }
}

function generateOrderNumber() {
    // Create a unique prefix for the order number
    $prefix = date('ymd-') . substr(md5(time()), 0, 6);

    // Generate a random number between 100000 and 999999
    $randomNumber = mt_rand(100000, 999999);

    // Return the unique order number
    return $prefix . $randomNumber;
}