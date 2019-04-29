<?php 

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["inputDate"]) && (!isset($_SESSION['horoscope']))){

        include_once('database.php');
        $database = new Database();
        $sql = "SELECT horoscopeSign FROM HoroscopeList";
        $query = $database->connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

        // $date = substr($_POST["inputDate"], 2);
        $_SESSION['horoscope'] = $result;
        echo json_encode(true);

    } else {
        echo json_encode(false);
    }
}