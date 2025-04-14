<?php

session_start();

//váriavel que verifica se a autenticação foi realizada
$usuário_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'administrativo', 2 => 'usuario');

$usuarios_app = array(
    array('id' => 1, 'email' => 'adm@gmail.com', 'senha' => '123456', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'user@gmail.com', 'senha' => '123456', 'perfil_id' => 1),
    array('id' => 3, 'email' => 'jose@gmail.com', 'senha' => '123456', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'maria@gmail.com', 'senha' => '123456', 'perfil_id' => 2),
);

foreach($usuarios_app as $user) {
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuário_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
        break;
    } 
}

if($usuário_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $user['id'];
    $_SESSION['perfil_id'] = $user['perfil_id'];
    header('Location: ../views/home.php');
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: ../index.php?login=erro'); //força o redirecionamento para este local
}