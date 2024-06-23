<?php
$dsn = 'mysql:host=db5015991272.hosting-data.io;port=3306;dbname=dbs13030850';
$username = 'dbu669452';
$password = 'viatuzangu@098';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage());
}
?>
