<?php
session_start();

// Verifica se índice foi enviado
if (!isset($_POST['indice'])) {
    header('Location: ../views/consultar_chamado.php');
    exit;
}

$indice = $_POST['indice'];
$arquivo = '../storage/chamados.hd';

// Lê todas as linhas
$chamados = file($arquivo);

// Remove o chamado correspondente ao índice
unset($chamados[$indice]);

// Reescreve o arquivo
file_put_contents($arquivo, implode('', $chamados));

header('Location: ../views/consultar_chamado.php');
