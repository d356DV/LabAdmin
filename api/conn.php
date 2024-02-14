<?php
$server = "your_server";
$db = "your_database";
$username = "your_username";
$password = "your_password";

try {
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT         => true,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    $dsn = "mysql:host=$server;dbname=$db;charset=utf8mb4";
    $conn = new PDO($dsn, $username, $password, $options);

    echo "Connected Successfully";
} catch (PDOException $e) {

    error_log("Connection failed: " . $e->getMessage());
    echo "Oops! Something went wrong. Please try again later.";

}
?>
