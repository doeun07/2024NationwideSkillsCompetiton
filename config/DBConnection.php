<?php
$host = 'localhost';
$dbname = 'gyongju';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>