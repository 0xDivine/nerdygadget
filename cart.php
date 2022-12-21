<?php
include "cartfuncties.php";
include "header.php";

$countkorting = 1;

if($countkorting < 2){
    #print($countkorting);
}



?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Winkelwagen</title>
</head>
<body>
<h1></h1>

<br>
<div class="container-fluid">
<table>
    <tr>
        <th></th>
        <th>Omschrijving</th>
        <th></th>
        <th></th>
        <th>Prijs</th>
        <th>Verwijder</th>
    </tr>
    <p><?php echo "&nbsp;", "&nbsp;"; ?>
    <a class="btn btn-secondary" href="browse.php" role="button">Terug naar artikelpagina</a>
    </p>

    <?php




    $cart = getCart();
    $totalprice = 0;


foreach($cart as $productid => $quantity){

    $b = getStockItem($productid, $databaseConnection);

    $item_name = $b["StockItemName"];
    $item_id = $b["StockItemID"];
    $item_price = $b["SellPrice"];
    $image = $b["BackupImagePath"];
    $quantity = $quantity - 1;
    $priceperitem = $item_price*$quantity;
    $totalprice = $totalprice + $priceperitem;
    $voorraad = $b["QuantityOnHand"];




?>


<tr>
    <td><img src="<?php echo "Public/StockGroupIMG/".$image;?>"width="50" height="50"</img></td>
   <!-- <td><?php echo $item_id ?></td> -->
    <td><?php echo $item_name ?></td>
    <td><select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
            <option selected><?php echo $quantity;?></option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>


            </td>
    <td></td>
    <td><?php echo "€ ".round($item_price,2); ?></td>
    <td>
            <form action="cart.php?id=<?php echo $item_id?>" method="POST">
            <button type="submit" class="btn btn-danger" name="del"><i class="fa fa-trash" aria-hidden="true"></i>
              <!-- <a href='cart.php?id=<?php echo $item_id; ?>'>Remove</a> --!>
                <?php

                if(isset($_POST['del'])){
                    $cart = getCart();
                    $b = $_GET["id"];
                    unset($cart[$b]);
                    $_SESSION["cart"] = $cart;
                }

                ?>
        </button>
        </form>
    </td>

</tr>


<?php } #$quantity = $quantity - 1; ?>
</table>
 <?php if(isset($_POST["kortingsbutton"])) {
    $totalprice = $totalprice - 5;

} ?>

    <br>
    <br>
    <br>
    <form method="post">
    <div class="form-group col-md-3">
        <input type="text" class="form-control" id="kortingcodeform" placeholder="Vul hier kortingscode in" >
        <button type="submit" class="btn btn-primary" name="kortingsbutton">Toepassen</button>
    </div>
    </form>



    </div>
    <br>



<h3>Totaal: <?php echo "€ ".round($totalprice,2);?></h3>

    <?php

    if (isset($_SESSION["klantid"]) && $_SESSION["klantid"]!=""){ ?>
        <form action="./gegevensinvullenaccount.php" method="post">
        <button name="afrekenen" class="btn btn-success">Bestellen</button>

        </form>
    <?php } else{ ?>
        <form action="./gegevensinvullen.php" method="post">
        <button name="afrekenen" class="btn btn-success">Bestellen</button>

        </form>
    <?php } ?>



<br>


<br>
<br>


    <?php
$couponCode = mt_rand(10000, 99999);?>


    <br>
<p><a href='browse.php'>Terug naar artikelpagina</a></p>


</div>

</body>
</html>
