<?php
$host = 'localhost'; 
$dbname = 'toko_hijab'; 
$username = 'root'; 
$password = ''; 
$dbname = 'toko_hijab';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
