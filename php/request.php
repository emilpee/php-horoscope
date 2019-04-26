<?php

    include 'addHoroscope.php';
    include 'viewHoroscope.php';

    class Horoscope {
        function __construct() {
            include_once('database.php');
            $this->database = new Database();
        }

        public function saveHoroscope() {
            include_once('database.php');
            $this->database = new Database();
            $sql = "SELECT horoscopeSign FROM HoroscopeList";
            $query = $this->database->connection->prepare($sql);
            $query->execute();

            $result = $query->fetchAll();

            $_SESSION['results'] = $result;


            if (empty($result)) {
                return array ("error"=>"Something went wrong.");
            } 
            return $result;  
        }

    }

    class PersonNr {
        private $horoscope;
        function __construct($date){
            
            $this->date = $date;

            if($date) {
                //echo $date;
            }

        }
        
        public function printSign(){
            return $this->horoscope;
        }
        
    }

    $horoscope = new PersonNr($date);

    try {
        if ($_POST["collectionType"] == "HoroscopeList") {

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