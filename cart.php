<?php
include "cartfuncties.php";
include "header.php";

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Winkelwagen</title>
</head>
<body>
<h1>Inhoud Winkelwagen</h1>
<br>

<table>
    <tr>
        <th></th>
        <th>Omschrijving</th>
        <th></th>
        <th></th>
        <th>Prijs</th>
    </tr>

<?php
$cart = getCart();
$toberemoved = 0;
$tellen = 0;
foreach($cart as $productid => $quantity){

    $b = getStockItem($productid, $databaseConnection);

    $item_name = $b["StockItemName"];
    $item_id = $b["StockItemID"];
    $item_price = $b["SellPrice"];
    $image = $b["BackupImagePath"];
    $toberemoved = $toberemoved + $b["StockItemID"];
    $quantity = $quantity - 1;
    $peritem = round($item_price*$quantity);
    $tellen = $tellen + 1;

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

</tr>


<?php } #$quantity = $quantity - 1; ?>
</table>
 <?php #print_r($b); ?>

<h3>Totaal: <?php echo "€ ".round($peritem*$tellen-0.05,2);?></h3>
<form action="./ordersuccess.php">

    <button class="btn btn-success">Afrekenen</button>

</form>

<br>
<br>
<br>



<p><a href='browse.php'>Terug naar artikelpagina</a></p>
</body>
</html>
