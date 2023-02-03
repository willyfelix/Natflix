<?php
    include '../main.php';


    $id = $_POST['id'];

    $stmt = $conn->prepare('DELETE FROM usuarios WHERE id = ?');
    $stmt->execute([
        $id,
    ])

?>