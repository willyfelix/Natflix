<?php
    require 'main.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = :email AND senha = :pw');
    $stmt->execute([ 'email' => $email, 'pw' => $password]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (sizeof($data) == 0) {
        http_response_code(401);
        exit();
    }

    $user = $data[0];
    $_SESSION['user'] = $user;
    echo json_encode($_SESSION['user']);

    http_response_code(200);
?>