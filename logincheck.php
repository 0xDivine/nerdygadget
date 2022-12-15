<?php
include "afrekenfuncties.php";
session_start();
// Connect to the database
$db = maakVerbinding();



// Check if the form has been submitted
if (isset($_POST["gebruikersnaam"]) && isset($_POST["wachtwoord"])) {
    // Retrieve the username and password from the form
    $username = $_POST['gebruikersnaam'];
    $password = $_POST['wachtwoord'];



    // Query the database to check if the provided username and password are correct
    $result = $db->query("SELECT * FROM klant WHERE gebruikernaam = '$username' AND wachtwoord = '$password'");
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);


    // Check if there is a match
    if ($result->num_rows > 0) {
        // If there is a match, log the user in
        $klantid = $rows[0]["klantid"];

        // Store the user's information in the session
        $_SESSION['klantid'] = $klantid;


        // Redirect the user to the home page
            header('Location: index.php');
          exit;
    } else {
        // If there is no match, show an error message
        echo '<h1>Invalid username or password.</h1>';
    }
}
?>