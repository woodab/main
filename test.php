<?php
// WARNING: This code is intentionally vulnerable and should be used only for educational or testing purposes.

$host = 'localhost';
$db   = 'mydatabase';
$user = 'root';
$pass = 'password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Vulnerable code: Directly using user input in SQL query without sanitization or prepared statements.
$id = $_GET['id']; // User input from URL parameter 'id'
$sql = "SELECT * FROM users WHERE id = $id"; // This line is vulnerable to SQL injection
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch())
{
    echo $row['name'] . "\n";
}

?>
