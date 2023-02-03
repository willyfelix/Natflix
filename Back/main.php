<?php
    header('Access-Control-Allow-Origin: http://localhost:5173');
    header('Access-Control-Allow-Credentials: true');

    $dsn = 'mysql:dbname=natflix;host=127.0.0.1;port=3306'; 
    $conn = new PDO($dsn, 'root', 'Nicole_3007');

    session_start();
?>