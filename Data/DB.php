<?php

class DB
{
    const DNS = "mysql:host=localhost;dbname=khateroshan;charset=utf8";
    const USERNAME = "root";
    const PASSWORD = "hamidreza";
    private $pdo = NULL;

    public function __construct() {
        //get connection to the database
        $this->pdo = $this->getConnection();
        $this->createTables();
        $this->setTheValues();
    }

    private function getConnection() {
        // create connection to the database
        $pdo = new PDO(self::DNS, self::USERNAME, self::PASSWORD);
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    private function createTables() {
        $query = "CREATE TABLE Topics (Topic_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
                    Topic_parent_id int(11) NOT NULL,
                    Name VARCHAR(100));

                    CREATE TABLE Tickets (id int(11) NOT NULL AUTO_INCREMENT,
                                Topic_id int(11) NOT NULL,
                                Body TEXT NOT NULL,
                                PRIMARY KEY (id),
                                FOREIGN KEY (Topic_id) REFERENCES Topics(Topic_id));";
        $handler = $this->pdo->prepare($query);
        $handler->execute();
    }

    private function setTheValues() {
        $query = "INSERT INTO Topics(`Topic_parent_id`, `Name`)
                    VALUES('0', 'first subject'), ('1', 'second subject'), ('1', 'third subject'),
                            ('0', 'fourth subject');

                INSERT INTO Tickets(`Topic_id`, `Body`) VALUES ('1', 'some text'), ('2', 'some text'),
                            ('1', 'some more text'), ('3', 'some text'), ('2', 'some more text'),
                            ('4', 'some text'), ('1', 'some more text');";
        $handler = $this->pdo->prepare($query);
        $handler->execute();
    }
}

$DbObj = new DB();
