<?php
require 'connect.php';

// Create clients table if it doesn't exist
$sql = "
CREATE TABLE IF NOT EXISTS clients (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL,
    company_name TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
";

try {
    $db->exec($sql);
    echo "Clients table created successfully.";
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}
?>
