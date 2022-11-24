<?php

include "./header.php";
include "afrekenfuncties.php";



$connection = maakVerbinding();

$b = selecteerKlanten($connection);

foreach($b as $row){
    $nummer =  $row["nummer"];
    $naam =  $row["naam"];
    $woonplaats = $row["woonplaats"];
}

?>

<table>
    <tr>
        <th>Klantnummer</th>
        <th>Naam</th>
        <th>Woonplaats</th>

    </tr>
<td><?php echo $nummer; ?></td>
    <td><?php echo $naam; ?></td>
    <td><?php echo $woonplaats; ?></td>
</table>
