<?php
$host = 'localhost';
$db = '';
$user = '';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
//options are left field, right is value
//as ERRMODE = Error Mode and DEFAULT FETCH MODE = FETCH ASSOCIATION ARRAY
//as EMULAYE PREPARES = false
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    //makes the connection
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
