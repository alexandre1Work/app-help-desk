<?php
    //abre e cria o arquivo caso não exista
    $arquivo = fopen('../storage/chamados.hd', 'a');

    //trata os dados do formulario
    $titulo = str_replace('#', '-', $_POST['titulo']); 
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //armazena o conteudo do formulário
    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //ecreve o conteudo no arquivo
    //1p abre o arq 2p escreve no arq 3a adiciona o conteudo no arq
    fwrite($arquivo, $texto);

    //fecha o arquivo
    fclose($arquivo);

    header('Location: ../pages/home.php');
?>