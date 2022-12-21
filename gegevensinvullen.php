<?php
include "header.php";
include "cartfuncties.php";
$_SESSION['action_count'] = 0;

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
            <input type="text" class="form-control" name="achternaam" placeholder="Kragt" required>
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
        <input type="text" class="form-control" name="straatnaam" placeholder="Hartkamp" required>
    </div>
        <div class="form-group col-md-1">
            <label for="huisnummer">Huisnummer:</label>
            <input type="text" class="form-control" name="huisnummer" placeholder="13" required>
        </div>
        <div class="form-group col-md-3">
            <label for="postcode">Postcode:</label>
            <input type="text" class="form-control" name="postcode" placeholder="8756 HJ" required>

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
</div>
</div>
</div>


</body>
</html>

