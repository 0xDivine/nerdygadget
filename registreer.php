<?php
include "./header.php";
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

<div class="container">
    <!--    <span class="border border-warning">-->

    <!-- action="https://www.ideal.nl/demo/?screens=dskweb"-->
    <br>
    <form <?php isset($_POST) ?> action="registratiegegevens.php" method="post">

        <div class="row justify-content-center">
            <h1>Registreer hier je gegevens!</h1>
        </div>

        <!-- dit is de rij van gebruikersnaam en wachtwoord.-->
        <div class="row justify-content-center">

            <div class="form-group col-md-3">
                <label for="voornaam">gebruikersnaam:</label>
                <input type="text" class="form-control" name="gebruikersnaam" placeholder="Dylan" required>
            </div>
            <div class="form-group col-md-3">
                <label for="achternaam">wachtwoord:</label>
                <input type="text" class="form-control" name="wachtwoord" placeholder="Kragt" required>
            </div>

        </div>

        <!-- dit is de rij van Email en telefoonnummer.-->
        <div class="row justify-content-center">

            <div class="form-group col-md-3">
                <label for="voornaam">E-mail:</label>
                <input type="text" class="form-control" name="email" placeholder="Dylan" required>
            </div>
            <div class="form-group col-md-3">
                <label for="achternaam">Telefoonnummer:</label>
                <input type="text" class="form-control" name="telefoonnummer" placeholder="Kragt" required>
            </div>

        </div>

        <!-- dit is de rij van voornaam en achternaam.-->
        <div class="row justify-content-center">

            <div class="form-group col-md-3">
                <label for="voornaam">Voornaam:</label>
                <input type="text" class="form-control" name="voornaam" placeholder="Dylan" required>
            </div>
            <div class="form-group col-md-3">
                <label for="achternaam">Achternaam:</label>
                <input type="text" class="form-control" name="achternaam" placeholder="Kragt" required>
            </div>

        </div>

        <!-- dit is de rij van Woonplaats en Straatnaam.-->
        <div class="row justify-content-center">

            <div class="form-group col-md-3">
                <label for="voornaam">Woonplaats:</label>
                <input type="text" class="form-control" name="woonplaats" placeholder="Dylan" required>
            </div>
            <div class="form-group col-md-3">
                <label for="achternaam">Straatnaam:</label>
                <input type="text" class="form-control" name="straatnaam" placeholder="Kragt" required>
            </div>

        </div>

        <!-- dit is de rij van huisnummer  en postcode.-->
        <div class="row justify-content-center">

            <div class="form-group col-md-3">
                <label for="voornaam">Huisnummer:</label>
                <input type="text" class="form-control" name="huisnummer" placeholder="Dylan" required>
            </div>
            <div class="form-group col-md-3">
                <label for="achternaam">Postcode:</label>
                <input type="text" class="form-control" name="postcode" placeholder="Kragt" required>
            </div>

        </div>

        <div class="row justify-content-center">

            <button type="submit" class="btn btn-success btn-lg">Registreer nu!</button>
        </div>
        <br>
        <br>

    </form>

</div>

</body>
</html>
