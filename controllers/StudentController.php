<?php

class StudentController
{
    private Student $studentModel;

    public function __construct(Student $studentModel)
    {
        $this->studentModel = $studentModel;
    }

    public function index()
    {
        $students = $this->studentModel->getAll();

        require __DIR__ . '/../views/students/index.php';
    }

    public function show($id)
    {
        $student = $this->studentModel->find($id);

        if (!$student) {
            echo "Data siswa tidak ditemukan.";
            exit;
        }

        require __DIR__ . '/../views/students/show.php';
    }

    public function create()
    {
        require __DIR__ . '/../views/students/create.php';
    }

    public function store()
    {
        $data = [
            'nis' => $_POST['nis'],
            'name' => $_POST['name'],
            'gender' => $_POST['gender'],
            'class_name' => $_POST['class_name'],
            'major' => $_POST['major'],
            'birth_place' => $_POST['birth_place'],
            'birth_date' => $_POST['birth_date'],
        ];

        $this->studentModel->create($data);

        header('Location: index.php');
        exit;
    }

    public function edit($id)
    {
        $student = $this->studentModel->find($id);

        if (!$student) {
            echo "Data siswa tidak ditemukan.";
            exit;
        }

        require __DIR__ . '/../views/students/edit.php';
    }

    public function update($id)
    {
        $data = [
            'nis' => $_POST['nis'],
            'name' => $_POST['name'],
            'birth_place' => $_POST['birth_place'] ?? null,
            'birth_date' => $_POST['birth_date'] ?? null,
            'gender' => $_POST['gender'],
            'class_name' => $_POST['class_name'],
            'major' => $_POST['major']
        ];

        $this->studentModel->update($id, $data);

        header('Location: index.php');
        exit;
    }

    public function destroy($id)
    {
        $this->studentModel->delete($id);

        header('Location: index.php');
        exit;
    }
}
