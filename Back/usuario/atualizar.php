<?php
    require '../main.php';

    if (!isset($_SESSION['user'])) {
        http_response_code(401);
        exit();
    }

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare('UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?');
    $stmt->execute([$nome, $email, $senha, $id ]);

    http_response_code(201);
?>