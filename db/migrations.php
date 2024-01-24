<?php

require_once __DIR__ . "/connection.php";

// Table name and definition
$tableName = 'users';

$tableDefinition = 'CREATE TABLE IF NOT EXISTS ' . $tableName . ' (
                        id INTEGER PRIMARY KEY,
                        name TEXT,
                        email TEXT UNIQUE,
                        password TEXT
                    )';

// Check if the table exists
$tableExists = $pdo->query("SELECT name FROM sqlite_master WHERE type='table' AND name='$tableName'")->fetchColumn();

// If the table exists, drop it and recreate
if ($tableExists) {
    $pdo->exec("DROP TABLE $tableName");
}

// Create the table
$pdo->exec($tableDefinition);

echo "Table '$tableName' created successfully.";

// Close the PDO connection
$pdo = null;