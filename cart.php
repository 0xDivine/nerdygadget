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
<table>
    <tr>
        <th>ID</th>
        <th>ProductName</th>
        <th>Quantity</th>
    </tr>

<?php
$cart = getCart();


foreach($cart as $productid => $quantity){

    $b = getStockItem($productid, $databaseConnection);
    $item_name = $b["StockItemName"];
    $item_id = $b["StockItemID"];

?>


<tr>
    <td><?php echo $item_id ?></td>
    <td><?php echo $item_name ?></td>
    <td>50</td>
</tr>


<?php } ?>
</table>




<p><a href='view.php?id=0'>Naar artikelpagina van artikel 0</a></p>
</body>
</html>
