<?php
session_start();

if (!isset($_POST['indice'])) {
    header('Location: ../views/consultar_chamado.php');
    exit;
}

$indice = $_POST['indice'];
$id_usuario = $_POST['id_usuario'];
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$linha_atualizada = $id_usuario . '#' . $titulo . '#' . $categoria . '#' . $descricao ;

$arquivo = '../storage/chamados.hd';
$chamados = file($arquivo);
$chamados[$indice] = $linha_atualizada;

file_put_contents($arquivo, implode('', $chamados));

header('Location: ../views/consultar_chamado.php');
