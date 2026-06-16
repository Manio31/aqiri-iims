<?php
$host = "localhost";
$dbname = "aqiri_ims";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Database connection successful!";
} catch(PDOException $e) {
    die("❌ Connection failed: " . $e->getMessage());
}
?>