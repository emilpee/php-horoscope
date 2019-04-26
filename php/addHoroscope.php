<?php session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        if ($_POST["collectionType"] == "HoroscopeList") {

            // Save last four numbers from input field and store in session
            $date = substr($_POST["inputDate"], 2);
            $_SESSION['personNr'] = $date;

            $horoscope = new Horoscope();
            $dbResult = $horoscope->saveHoroscope();
            $_SESSION['horoscope'] = $_POST['inputDate'];
            echo json_encode($dbResult); 
            exit;
        }
    } 
        
    catch(Exception $error) {
        http_response_code(500);
        echo json_encode($error->getMessage());
    }


}