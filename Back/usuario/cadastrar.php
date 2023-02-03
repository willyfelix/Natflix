<?php
    require '../main.php';

    // Passo 1: Pegar informações do front;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Passo 2: Inserir as informações no BD;
    $stmt = $conn->prepare('INSERT INTO usuarios(nome, email, senha) VALUES (?, ?, ?)');
    $stmt->execute([$nome, $email, $senha ]);

    // Passo 3: Retornar ok!
    http_response_code(201);
?>