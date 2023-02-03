<?php
    require '../main.php';

    if (!isset($_SESSION['user'])) {
        http_response_code(401);
        exit();
    }

    $usuarioId = $_SESSION['user']['id'];
    $stmt = $conn->prepare('SELECT * FROM filmes WHERE usuario_id = ?');
    $stmt->execute([ $usuarioId ]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);


?>