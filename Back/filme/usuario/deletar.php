<?php
    include '../main.php';


    $id = $_POST['id'];

    $stmt = $conn->prepare('DELETE FROM filmes WHERE id = ?');
    $stmt->execute([
        $id,
    ])

?>