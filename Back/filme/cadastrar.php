<?php
    require '../main.php';

    if (!isset($_SESSION['user'])) {
        http_response_code(401);
        exit();
    }
   
    $titulo = $_POST['titulo'];
    $diretor = $_POST['diretor'];
    $genero = $_POST['genero'];
    $anoDeLancamento = $_POST['anoDeLancamento'];
    $usuarioId = $_SESSION['user']['id'];

    $stmt = $conn->prepare('INSERT INTO filmes(titulo, diretor, genero, anoDeLancamento, usuario_id) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$titulo, $diretor, $genero, $anoDeLancamento, $usuarioId ]);

    http_response_code(201);
?>