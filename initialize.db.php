<?php
$dsn = 'mysql:host=db5015991272.hosting-data.io;port=3306;dbname=dbs13030850';
$username = 'dbu669452';
$password = 'viatuzangu@098';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE TABLE IF NOT EXISTS messages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    echo "Database initialized successfully.";
} catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage());
}
?>
