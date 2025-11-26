<?php
// Path to SQLite database
$dbPath = __DIR__ . '/clients.db';

// Create database file if it does not exist
if (!file_exists($dbPath)) {
    touch($dbPath);
}

// Open connection
$db = new PDO('sqlite:' . $dbPath);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Create clients table
$query = "
CREATE TABLE IF NOT EXISTS clients (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE
