<?php

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "DELETE") {

        $errorMessage = "No horoscope saved!";
        $successMessage = "Your horoscope was deleted!";

        if($_SESSION == null) {
            echo $errorMessage;
        } else {
            echo $successMessage;
            session_destroy();
        } 
    } 

?>