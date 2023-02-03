<?php
    require '../main.php';

    $stmt = $conn->query('SELECT * FROM filmes');
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);


?>