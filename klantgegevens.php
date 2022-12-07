 <?php

include "./header.php";
include "afrekenfuncties.php";
?>
<div class="container-fluid">

    <div class="row">
        <div class="form-group col-md-4">
            <h3>Klantennummer  </h3>
        </div>
        <div class="form-group col-md-4">
            <h3>Naam  </h3>
        </div>
        <div class="form-group col-md-4">
            <h3>Woonplaats  </h3>
        </div>
    </div>
</div>
<?php
$connection = maakVerbinding();


 $gegevens = selecteerKlanten($connection);

foreach($gegevens as $gegeven){

    $nummer = $gegeven["nummer"];
    $naam =  $gegeven["naam"];
    $woonplaats = $gegeven["woonplaats"];


?>
    <div class="container-fluid">

     <div class="row">
         <div class="form-group col-md-4">
             <h4><?php echo $nummer; ?></h4>
         </div>
         <div class="form-group col-md-4">
             <h4><?php echo $naam; ?></h4>
         </div>
         <div class="form-group col-md-4">
             <h4><?php echo $woonplaats; ?></h4>
         </div>

     </div>
    </div>

 <?php } ?>