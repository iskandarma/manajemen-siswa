<?php

require __DIR__ . '/config/database.php';
require __DIR__ . '/models/Student.php';
require __DIR__ . '/controllers/StudentController.php';

$studentModel = new Student($pdo);

$controller = new StudentController($studentModel);

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$url = str_replace(
    '/manajemen-siswa',
    '',
    $url
);

$id = $_GET['id'] ?? null;

$parts = explode('/', trim($url, '/'));

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET' && $url === '/students') {
    $controller->index();
} elseif ($method === 'GET' && $url === '/students/create') {
    $controller->create();
} elseif ($method === 'POST' && $url === '/students') {
    $controller->store();
}

// 4. DETAIL SISWA (GET) -> Contoh URL: /students/show?id=1
elseif ($method === 'GET' && $url === '/students/show') {
    $controller->show($id);
}

// 5. FORM EDIT SISWA (GET) -> Contoh URL: /students/edit?id=1
elseif ($method === 'GET' && $url === '/students/edit') {
    $controller->edit($id);
}

// 6. PROSES UPDATE SISWA (POST) -> Contoh URL: /students/update?id=1
elseif ($method === 'POST' && $url === '/students/update') {
    $controller->update($id);
}

// 7. PROSES DELETE SISWA (POST) -> Contoh URL: /students/delete?id=1
elseif ($method === 'POST' && $url === '/students/delete') {
    $controller->destroy($id);
} else {
    http_response_code(404);
    echo "404 - Route tidak ditemukan";
}
