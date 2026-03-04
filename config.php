<?php
// Database configuration
define('DB_HOST', 'db');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'myphpadmin');

// Create database connection
try {
    $dsn = "mysql:host=db;port=3306;dbname=myphpadmin;charset=utf8mb4";
    $conn = new PDO($dsn, DB_USER, DB_PASS);
} catch (Exception $e) {
    die("Database connection error: " . $e->getMessage());
}

//Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}