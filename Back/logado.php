<?php
    require 'main.php';

    if (isset($_SESSION['user'])) {
        http_response_code(200);
        echo json_encode($_SESSION['user']);
        exit();
    }
    
    http_response_code(401);
?>