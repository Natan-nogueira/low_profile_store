<?php
require_once '../app/config/db_con.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];

    if (empty($nome)) {
        die('Nome não pode ser vazio.');
    }
    $pdo->exec("SET TIME ZONE 'America/Sao_Paulo'");
    
    $stmt = $pdo->prepare('INSERT INTO low_profile.tipo_produto (descricao) VALUES (:nome)');
    $stmt->bindParam(':nome', $nome);

    if ($stmt->execute()) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        die('Erro ao adicionar o produto.');
    }
} else {
    die('Método não permitido.');
}
