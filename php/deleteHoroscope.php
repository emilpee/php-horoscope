<?php

    session_start();

    if($_SESSION == null) {
        echo "No horoscoped saved!";
    } else {
        echo "Your horoscope was deleted!";
        session_destroy();
    }

?>