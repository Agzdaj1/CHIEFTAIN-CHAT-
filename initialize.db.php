<?php
$host = 'db5015991272.hosting-data.io';
$db = 'dbs13030850';
$user = 'dbu669452';
$pass = 'viatuzangu@098';
$port = 3306;

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4;port=$port";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Create tables
    $sql = "
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            wins INT DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );

        CREATE TABLE IF NOT EXISTS games (
            id INT AUTO_INCREMENT PRIMARY KEY,
            player1_id INT NOT NULL,
            player2_id INT NOT NULL,
            board VARCHAR(255) DEFAULT '[\"\", \"\", \"\", \"\", \"\", \"\", \"\", \"\", \"\"]',
            winner_id INT DEFAULT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (player1_id) REFERENCES users(id),
            FOREIGN KEY (player2_id) REFERENCES users(id)
        );
    ";
    $pdo->exec($sql);

    echo "Database initialized successfully!";
} catch (PDOException $e) {
    echo "Database initialization failed: " . $e->getMessage();
}
?>
