<?php
include "header.php";
?>
<div class="container-fluid">
<h1>Vul al je gegevens in!</h1>
<br>
<form <?php isset($_POST) ?> action="redirectdemo.php" method="post">
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
    <button type="submit" class="btn btn-success">Afrekenen</button>
</form>



</div>
</div>
</div>
</div>
</body>
</html>

