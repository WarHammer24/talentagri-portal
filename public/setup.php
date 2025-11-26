<?php
// Path to the SQLite database file
$dbPath = __DIR__ . '/../database/talentagri.db';

try {
    $db = new PDO('sqlite:' . $dbPath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create clients table
    $sql = "CREATE TABLE IF NOT EXISTS clients (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                email TEXT NOT NULL UNIQUE,
                password TEXT NOT NULL,
                created_at TEXT DEFAULT CURRENT_TIMESTAMP
            );";

    $db->exec($sql);

    echo 'Database and clients table created successfully.';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
