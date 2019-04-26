<?php session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // Save last four chars from input and add to session
    $date = substr($_POST["inputDate"], 2);
    $_SESSION['personNr'] = $date;


}