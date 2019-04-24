<?php 

    class Database {

        function __construct() {
            $dbname = 'mysql:host=localhost;dbname=horoskop;';
            $user = 'root';
            $password = '';

            try {
                $this->connection=new PDO($dbname, $user, $password);
            } catch (PDOException $e) {
                throw $e;
            }
        }
        
    }

?>