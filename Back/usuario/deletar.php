<?php
    include '../main.php';

    if (!isset($_SESSION['user'])) {
        http_response_code(401);
        exit();
    }

    $id = $_POST['id'];

    $stmt = $conn->prepare('DELETE FROM usuarios WHERE id = ?');
    $stmt->execute([ $id ])

?>