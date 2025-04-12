<?php
    require_once '../models/ChamadosModel.php';

    ChamadoModel::salvar($_POST['titulo'], $_POST['categoria'], $_POST['descricao']);
    header('Location: ../views/sucesso.php');
    exit;
