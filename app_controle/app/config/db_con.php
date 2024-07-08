<?php
$host = 'aws-0-sa-east-1.pooler.supabase.com';
$port = '6543';
$dbname = 'postgres';
$user = 'postgres.ppoackmnmmeghjsjqcks';
$password = '@Natan251298';

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
try {
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    echo "Erro ao conectar ao PostgreSQL: " . $e->getMessage();
}
?>