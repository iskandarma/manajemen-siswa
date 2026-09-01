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
}
