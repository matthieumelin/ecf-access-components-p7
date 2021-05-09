<?php
// connect to sql database
global $pdo;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=ecf_p1_db', 'ecf_user', 'ecf_password');
} catch (PDOException $exception) {
    echo $exception->getMessage();
    exit();
}
