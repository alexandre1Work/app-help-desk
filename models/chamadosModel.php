<?php
    session_start();
class ChamadoModel
{

    public static function salvar($titulo, $categoria, $descricao)
    {

        //trata os dados do formulario
        $titulo = str_replace('#', '-', $_POST['titulo']);
        $categoria = str_replace('#', '-', $_POST['categoria']);
        $descricao = str_replace('#', '-', $_POST['descricao']);

        //armazena o conteudo do formulário
        $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
        
        $arquivo = fopen('../storage/chamados.hd', 'a'); //abre e cria o arquivo caso não exista
        fwrite($arquivo, $texto); //ecreve o conteudo no arquivo
        fclose($arquivo); //fecha o arquivo         

        return true;
    }
}
