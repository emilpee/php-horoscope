<?php

    session_start();

    $errorMessage = "No horoscope saved!";
    $successMessage = "Your horoscope was deleted!";

    if($_SESSION == null) {
        echo $errorMessage;
    } else {
        echo "$successMessage";
        session_destroy();
    }

?>