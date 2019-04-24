<?php

    include 'addHoroscope.php';

        try {
            if ($_POST["collectionType"] == "HoroscopeList") {
        
                if($_POST["action"] == "getHoroscope") {
                    $horoscope = new Horoscope();
                    $dbResult = $horoscope->getHoroscope();
                    echo json_encode($dbResult); 
                    exit;
                }

            }

        } catch(Exception $error) {
                http_response_code(500);
                echo json_encode($error->getMessage());
            }