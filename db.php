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
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>
