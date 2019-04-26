<?php session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'function.php';
    $wrongNumberMessage = $horoscope->printSign();


}