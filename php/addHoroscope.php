<?php

    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_POST['birthdate'])) {
            $_SESSION['horoscope'] = $_POST['birthdate'];
        }


/* sidan ska bara gå att begära via POST, den ska kolla efter ett födelsedatum i $_POST, räkna ut
vilket horoskop födelsedatumet tillhör genom att hämta information ifrån databasen och spara det
i $_SESSION.
Om ett horoskop redan finns sparat ska det inte skrivas över. Om det inte gick att räkna ut
horoskopet ska ingenting sparas.
Sidan ska inte använda echo eller skriva någon output förutom true eller false, beroende på om
horoskopet sparades.*/

        class Horoscope {

            function __construct() {
                include_once('database.php');
                $this->database = new Database();
            }

            public function getHoroscope() {

                include_once('database.php');
                $this->database = new Database();
                $sql = "SELECT * FROM HoroscopeList";
                $query = $this->database->connection->prepare($sql);
                $query->execute();
                $result = $query->fetchAll();

                if (empty($result)) {
                    return array ("error"=>"Something went wrong.");
                } 

                return $result; 
            }
        
        }

    }