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

    public function find($id)
    {
        $sql = "SELECT * FROM students WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            'id' => $id
        ]);

        return $stmt->fetch();
    }
}
