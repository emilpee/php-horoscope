<?php 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["inputDate"]) && (isset($_SESSION['horoscope']))){

        $newDate = $_POST["inputDate"];
        include_once('./database.php');
        $database = new Database();
        $sql = "SELECT * FROM HoroscopeList WHERE (dateFrom <= '$newDate') AND (dateUntil >= '$newDate')";
        $query = $database->connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

        $_SESSION['horoscope'] = $result;
        echo json_encode(true);

    } else {
        echo json_encode(false);
    }
}