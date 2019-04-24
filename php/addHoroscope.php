<?php

    class Horoscope {

        function __construct() {
            include_once('database.php');
            $this->database = new Database();
        }

        public function getHoroscope() {

            $query = $this->database->connection->prepare("SELECT * FROM HoroscopeList;");
            $query->execute();
            $result = $query->fetchAll();

            if (empty($result)) {
                return array ("error"=>"Something went wrong.");
            }

            return $result; 
        }
    
    }