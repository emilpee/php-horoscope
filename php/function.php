<?php

$date = $_POST["inputDate"];

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

        if(strlen($date) != 4){
            $this->horoscope = "<p>Felaktigt personnummer!</p>";
        }
        elseif($date >= '1222' && $date <= '1230' || $date >= '0101' && $date <= '0119'){  
            $this->horoscope = "<h1>Du är en stenbock!</p>";
        }
        elseif($date >= '0120' && $date <= '0131' || $date >= '0201' && $date <= '0218'){  
            $this->horoscope = "<h1>Du är en stenbock!</p>";
        }

    }
    
    public function printSign(){
        return $this->horoscope;
    }
    
}

$horoscope = new PersonNr($date);