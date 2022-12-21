<?php
include "afrekenfuncties.php";
function klantgegevensopvragen() {
    $klantid = $_SESSION["klantid"];
    $connection = maakVerbinding();
    $sql = "SELECT * FROM klant WHERE klantid = '$klantid'";
    $result = mysqli_fetch_all(mysqli_query($connection, $sql),MYSQLI_ASSOC);
    return $result;
}
