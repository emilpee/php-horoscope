<?php

session_start();
parse_str(file_get_contents("php://input"), $_PUT); 

if ($_SERVER["REQUEST_METHOD"] == $_PUT) {

    if(isset($_SESSION['horoscope'])) {
        echo json_encode(array($_SESSION["horoscope"]));
    }

}