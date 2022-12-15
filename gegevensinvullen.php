<?php

include "header.php";
include "cartfuncties.php";


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
<h1>Vul al je gegevens in!</h1>
<!-- action="https://www.ideal.nl/demo/?screens=dskweb"-->
<br>
<form <?php isset($_POST) ?> action="ordersuccess.php" method="post">
<!-- dit is de rij van voor en achternaam.-->
    <div class="form-row">

        <div class="form-group col-md-3">
            <label for="voornaam">Voornaam:</label>
            <input type="text" class="form-control" name="voornaam" placeholder="Dylan" required>
        </div>
        <div class="form-group col-md-3">
            <label for="achternaam">Achternaam:</label>
            <input type="text" class="form-control" id="achternaam" placeholder="Kragt">
        </div>
    </div>

<!-- dit is de rij van email-->
    <div class="form-row">

    <div class="form-group col-md-6">
        <label for="woonplaats">Woonplaats:</label>
        <input type="text" class="form-control" name="woonplaats" placeholder="Blokzijl" required>
    </div>
    </div>

<!-- dit is de rij met straatnaam, postcode, huisnummer-->
    <div class="form-row">

    <div class="form-group col-md-3">
        <label for="straatnaam">Straatnaam:</label>
        <input type="text" class="form-control" id="straatnaam" placeholder="Hartkamp" >
    </div>
        <div class="form-group col-md-1">
            <label for="huisnummer">Huisnummer:</label>
            <input type="text" class="form-control" id="Huisnummer" placeholder="13">
        </div>
        <div class="form-group col-md-3">
            <label for="postcode">Postcode:</label>
            <input type="text" class="form-control" name="postcode" placeholder="8756 HJ">

        </div>

    </div>
    <h2>Betalingsmethode</h2>
    <div class="form-group col-md-3">
        <label for="betalingsmethode:"></label>
        <select name="cars" id="cars">
            <option value="volvo">iDEAL</option>
            <option value="saab">PayPal</option>
            <option value="opel"></option>
            <option value="audi"></option>
        </select>

    </div>


    <button type="submit" class="btn btn-success">Afrekenen</button>

</form>


</div>


</body>
</html>

