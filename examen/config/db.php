<?php
// /config/db.php
try {
    $db = new PDO('mysql:host=localhost;dbname=task_manager', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}