<?php
include "./header.php";

?>
<body>

<div class="container">
<!--    <span class="border border-warning">-->

    <!-- action="https://www.ideal.nl/demo/?screens=dskweb"-->
    <br>
    <form <?php isset($_POST) ?> action="logincheck.php" method="post">

        <div class="row justify-content-center">
        <h1>Log hier in met je eigen gegevens!</h1>
        </div>

        <!-- dit is de rij van voor en achternaam.-->
        <div class="row justify-content-center">

            <div class="form-group col-md-3">
                <label for="Gebruikersnaam">Gebruikersnaam:</label>
                <input type="text" class="form-control" name="gebruikersnaam" placeholder="Dylan" >
            </div>
            <div class="form-group col-md-3">
                <label for="wachtwoord">Wachtwoord:</label>
                <input type="text" class="form-control" name="wachtwoord" placeholder="Kragt">
            </div>
        </div>

        <!-- dit is de rij van email-->
<!--        <div class="row justify-content-center">-->
<!---->
<!--            <div class="form-group col-md-3">-->
<!--                <label for="voornaam">Voornaam:</label>-->
<!--                <input type="text" class="form-control" name="voornaam" placeholder="Dylan" required>-->
<!--            </div>-->
<!--            <div class="form-group col-md-3">-->
<!--                <label for="achternaam">Achternaam:</label>-->
<!--                <input type="text" class="form-control" id="achternaam" placeholder="Kragt">-->
<!--            </div>-->
<!---->
<!--        </div>-->

        <div class="row justify-content-center">

        <button type="submit" class="btn btn-success btn-lg">Log in</button>
        </div>

        <div class="row justify-content-center">

            <h6> Heb je nou nog geen account <a href="registreer.php"> registreer </a>  nu!</h6>

        </div>
    </form>


</div>

</body>
</html>
