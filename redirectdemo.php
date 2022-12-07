<?php
include "afrekenfuncties.php";

if (isset($_POST["voornaam"]) && isset($_POST["woonplaats"])){
    $voornaam = $_POST["voornaam"];
    $woonplaats = $_POST["woonplaats"];

    $connection = maakVerbinding();
    $statement = "INSERT INTO klant (naam, woonplaats) VALUES ('$voornaam','$woonplaats')";
    // $statement = "INSERT INTO klant (naam, woonplaats) VALUES (?,?)";
//    mysqli_stmt_bind_param($statement, 'ss', $voornaam, $woonplaats);
//    mysqli_stmt_execute($statement);
    $result = mysqli_query($connection, $statement);

    print("QUERY GEDAAN!!!".$voornaam);
}

header('Location: '.'https://www.ideal.nl/demo/?screens=dskweb');

?>

