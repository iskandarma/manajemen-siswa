<?php

class Student
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query(
            "SELECT * FROM students"
        );

        return $stmt->fetchAll();
    }
}
