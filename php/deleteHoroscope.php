<?php

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "DELETE") {
        
        if(isset($_SESSION['horoscope']) || $_SESSION['horoscope'] == NULL) {
            echo json_encode(true);
            session_destroy();
        } else {
            echo json_encode(false);
        } 
    } 

?>