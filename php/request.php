<?php

    include 'addHoroscope.php';
    include 'viewHoroscope.php';

        try {
            if ($_POST["collectionType"] == "HoroscopeList") {
    
                    $horoscope = new Horoscope();
                    $dbResult = $horoscope->saveHoroscope();
                    $_SESSION["horoscope"] = $_POST["inputDate"];
                    echo json_encode($dbResult); 
                    exit;
            }
        } 
        
        catch(Exception $error) {
            http_response_code(500);
            echo json_encode($error->getMessage());
        }