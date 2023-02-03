<?php
    require '../main.php';

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $diretor = $_POST['diretor'];
    $genero = $_POST['genero'];
    $anoDeLancamento = $_POST['anoDeLancamento'];


    $stmt = $conn->prepare('UPDATE filmes SET titulo = ?, diretor = ?, genero = ?, anoDeLancamento = ? WHERE id = ?');
    $stmt->execute([$titulo, $diretor, $genero, $anoDeLancamento, $id ]);

    http_response_code(201);

?>