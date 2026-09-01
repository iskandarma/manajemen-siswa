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

    public function create($data)
    {
        $sql = "INSERT INTO students
            (nis, name, gender, class_name, major, birth_date, birth_place)
            VALUES
            (:nis, :name, :gender, :class_name, :major, :birth_date, :birth_place)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'nis' => $data['nis'],
            'name' => $data['name'],
            'gender' => $data['gender'],
            'class_name' => $data['class_name'],
            'major' => $data['major'],
            'birth_date' => $data['birth_date'],
            'birth_place' => $data['birth_place']
        ]);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE students
            SET
                nis = :nis,
                name = :name,
                gender = :gender,
                class_name = :class_name,
                major = :major,
                birth_date = :birth_date,
                birth_place = :birth_place
            WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'id' => $id,
            'nis' => $data['nis'],
            'name' => $data['name'],
            'gender' => $data['gender'],
            'class_name' => $data['class_name'],
            'major' => $data['major'],
            'birth_date' => $data['birth_date'],
            'birth_place' => $data['birth_place']
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM students WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            'id' => $id
        ]);
    }
}
