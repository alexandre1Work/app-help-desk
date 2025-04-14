<?php
require_once '../auth/validador_acesso.php';
?>

<?php

if (!isset($_POST['indice'])) {
    header('Location: ../views/consultar_chamado.php');
    exit;
}

$indice = $_POST['indice'];
$arquivo = '../storage/chamados.hd';
$chamados = file($arquivo);
$chamado = explode('#', $chamados[$indice]);

// Verifica se é usuário comum e se o chamado é dele
if ($_SESSION['perfil_id'] == 2 && $_SESSION['id'] != $chamado[0]) {
    header('Location: consultar_chamado.php');
    exit;
}
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/90a969b901.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">
            <img src="../assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="btn btn-outline-danger nav-link pl-3 pr-3" href="../auth/logoff.php">SAIR <i class="fa-solid fa-right-from-bracket"></i></a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header fw-bold fs-4">
                        <h4><i class="fa-solid fa-pen-to-square"></i> Editar Chamado</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                <form method="POST" action="../controllers/atualizar_chamado.php">
                                    <input type="hidden" name="indice" value="<?= $indice ?>">
                                    <input type="hidden" name="id_usuario" value="<?= $chamado[0] ?>">

                                    <div class="form-group">
                                        <label>Título</label>
                                        <input class="form-control" type="text" name="titulo" value="<?= $chamado[1] ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Categoria</label>
                                        <select class="form-control" name="categoria" class="form-control" value="<?= $chamado[2] ?>">
                                            <option>Criação Usuário</option>
                                            <option>Impressora</option>
                                            <option>Hardware</option>
                                            <option>Software</option>
                                            <option>Rede</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea class="form-control" name="descricao" rows="3" required><?= $chamado[3] ?></textarea>
                                    </div>

                                    <button class="btn btn-lg btn-info btn-block col-6" type="submit">Salvar Alterações</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>