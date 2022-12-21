<?php
session_start();
include "afrekenfuncties.php";
$klantid = $_SESSION["klantid"];

if (isset($_POST["voornaam"]) &&
    isset($_POST["achternaam"]) &&
    isset($_POST["woonplaats"]) &&
    isset($_POST["straatnaam"]) &&
    isset($_POST["huisnummer"]) &&
    isset($_POST["postcode"])){
    $voornaam = $_POST["voornaam"];
    $woonplaats = $_POST["woonplaats"];
    $achternaam = $_POST["achternaam"];
    $straatnaam = $_POST["straatnaam"];
    $huisnummer = $_POST["huisnummer"];
    $postcode = $_POST["postcode"];

    $connection = maakVerbinding();
    $query = "UPDATE klant SET voornaam = ?,
        achternaam = ?,
        woonplaats = ?,
        straatnaam = ?,
        huisnummer = ?,
        postcode = ?
    WHERE klantid = ?";
    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, 'ssssisi', $voornaam,$achternaam, $woonplaats,
        $straatnaam, $huisnummer, $postcode, $klantid);
    mysqli_stmt_execute($statement);


}

header('Location: ordersuccess.php');

?>


