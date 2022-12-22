<?php
include "header.php";
include "cartfuncties.php";
include "functieaccount.php";
$_SESSION['action_count'] = 0;
$b = korting();
$gegevens = klantgegevensopvragen();

?>
<div class="container-fluid">
    <h1>Vul al je gegevens in!</h1>

    <form <?php isset($_POST) ?> action="functieupdategegevens.php" method="post">
        <!-- dit is de rij van voor en achternaam.-->
        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="voornaam">Voornaam:</label>
                <input type="text" class="form-control" name="voornaam" value="<?php print($gegevens[0]["voornaam"]); ?>" required>
            </div>
            <div class="form-group col-md-3">
                <label for="achternaam">Achternaam:</label>
                <input type="text" class="form-control" name="achternaam"value="<?php print($gegevens[0]["achternaam"]); ?>" required>
            </div>
        </div>

        <!-- dit is de rij van email-->
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="woonplaats">Woonplaats:</label>
                <input type="text" class="form-control" name="woonplaats" value="<?php print($gegevens[0]["woonplaats"]); ?>" required>
            </div>
        </div>

        <!-- dit is de rij met straatnaam, postcode, huisnummer-->
        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="straatnaam">Straatnaam:</label>
                <input type="text" class="form-control" name="straatnaam" value="<?php print($gegevens[0]["straatnaam"]); ?>" required>
            </div>
            <div class="form-group col-md-1">
                <label for="huisnummer">Huisnummer:</label>
                <input type="text" class="form-control" name="huisnummer" value="<?php print($gegevens[0]["huisnummer"]); ?>" required>
            </div>
            <div class="form-group col-md-3">
                <label for="postcode">Postcode:</label>
                <input type="text" class="form-control" name="postcode" value="<?php print($gegevens[0]["postcode"]); ?>" required>

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

