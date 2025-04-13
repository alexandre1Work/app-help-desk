<?php

session_start();

//váriavel que verifica se a autenticação foi realizada
$usuário_autenticado = false;

$usuarios_app[] = array('email' => 'teste@gmail.com', 'senha' => '123456');

foreach($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuário_autenticado = true;
        break;
    } 
}

if($usuário_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    header('Location: ../views/home.php');
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: ../index.php?login=erro'); //força o redirecionamento para este local
}