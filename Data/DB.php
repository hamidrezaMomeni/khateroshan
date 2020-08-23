<?php

class DB
{
    const DNS = "mysql:host=localhost;dbname=khateroshan;charset=utf8";
    const USERNAME = "root";
    const PASSWORD = "hamidreza";
    private $pdo = NULL;

    public function getConnection() {
        // create connection to the database
        $pdo = new PDO(self::DNS, self::USERNAME, self::PASSWORD);
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
    }

    public function getCountTopicNumber($topicNumber) {
        $query = "SELECT count(*) FROM Tickets WHERE `Topic_id` = {$topicNumber}";
        $handler = $this->pdo->prepare($query);
        $handler->execute();
        return $handler;
    }
}

$DbObj = new DB();
$DbObj->getConnection();
$result = $DbObj->getCountTopicNumber($_POST['topicNumber']);
$result = $result->fetchAll();
include "../Views/DB.php";
