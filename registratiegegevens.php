<?php
include "afrekenfuncties.php";

if (isset($_POST["voornaam"]) &&
    isset($_POST["woonplaats"]) &&
    isset($_POST["achternaam"]) &&
    isset($_POST["gebruikersnaam"]) &&
    isset($_POST["wachtwoord"]) &&
    isset($_POST["telefoonnummer"]) &&
    isset($_POST["straatnaam"]) &&
    isset($_POST["postcode"]) &&
    isset($_POST["huisnummer"]) &&
    isset($_POST["email"])) {
    $voornaam = $_POST["voornaam"];
    $woonplaats = $_POST["woonplaats"];
    $achternaam = $_POST["achternaam"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $wachtwoord = $_POST["wachtwoord"];
    $telefoonnummer = $_POST["telefoonnummer"];
    $straatnaam = $_POST["straatnaam"];
    $postcode = $_POST["postcode"];
    $huisnummer = $_POST["huisnummer"];
    $email = $_POST["email"];

    $connection = maakVerbinding();
    $query = "INSERT INTO klant (voornaam, woonplaats, achternaam, gebruikernaam, wachtwoord, telefoonnummer, straatnaam, postcode, huisnummer, email) 
        VALUES (?,?,?,?,?,?,?,?,?,?)";
    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, 'sssssissis', $voornaam, $woonplaats, $achternaam, $gebruikersnaam, $wachtwoord,
        $telefoonnummer, $straatnaam, $postcode, $huisnummer, $email);
    mysqli_stmt_execute($statement);


}

header('Location: '.'http://localhost/nerdygadgets/login.php');
?>