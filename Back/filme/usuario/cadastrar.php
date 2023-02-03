<?php
    require '../main.php';

    // Passo 1: Pegar informações do front;
   
    $titulo = $_POST['titulo'];
    $diretor = $_POST['diretor'];
    $genero = $_POST['genero'];
    $anoDeLancamento = $_POST['anoDeLancamento'];



    // Passo 2: Inserir as informações no BD;

    $stmt = $conn->prepare('INSERT INTO filmes(titulo, diretor, genero, anoDeLancamento) VALUES (?, ?, ?, ?)');
    $stmt->execute([$titulo, $diretor, $genero, $anoDeLancamento ]);

    // Passo 3: Retornar ok!

    http_response_code(201);
?>