<?php
include "afrekenfuncties.php";

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
    $statement = "INSERT INTO nawgegevens (voornaam, achternaam, woonplaats, straatnaam, huisnummer, postcode) 
    VALUES ('$voornaam','$achternaam','$woonplaats', '$straatnaam' , '$huisnummer', '$postcode')";
    // $statement = "INSERT INTO klant (naam, woonplaats) VALUES (?,?)";
//    mysqli_stmt_bind_param($statement, 'ss', $voornaam, $woonplaats);
//    mysqli_stmt_execute($statement);
    $result = mysqli_query($connection, $statement);


}


header('Location: ordersuccess.php');

?>

