<?php
// Database configuration for Railway
$host = $_ENV['MYSQLHOST'] ?? 'localhost';
$username = $_ENV['MYSQLUSER'] ?? 'root';
$password = $_ENV['MYSQLPASSWORD'] ?? '';
$database = $_ENV['MYSQLDATABASE'] ?? 'railway';
$port = $_ENV['MYSQLPORT'] ?? 3306;

// Create connection
$conn = mysqli_connect($host, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset to utf8
mysqli_set_charset($conn, "utf8");
?>