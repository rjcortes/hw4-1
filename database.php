<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    $username = 'rjc37';
    $password = 'cosette2';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
