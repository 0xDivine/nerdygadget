<?php

function sluitVerbinding($connection) {
    mysqli_close($connection);
}

function maakVerbinding() {
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $databasename = "nerdygadgets";
    $connection = mysqli_connect($host, $user, $pass, $databasename);
    return $connection;
}

function alleKlantenOpvragen() {
    $connection = maakVerbinding();
    $klanten = selecteerKlanten($connection);
    sluitVerbinding($connection);
    return $klanten;
}

function selecteerKlanten($connection) {
    $sql = "SELECT nummer, naam, woonplaats FROM klant ORDER BY naam";
    $result = mysqli_fetch_all(mysqli_query($connection, $sql),MYSQLI_ASSOC);
    return $result;
}