<?php
require_once '../auth/validador_acesso.php';
?>

<?php

//array de chamados
$chamados = array();
$arquivo = fopen('../storage/chamados.hd', 'r');

//enquato houverem registros (linhas) a serem recuperados
while (!feof($arquivo)) { //testa pelo fim do arquivo
  //linhas
  $registro = fgets($arquivo); //recupera a linha
  $chamados[] = $registro;
}

fclose($arquivo);
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

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header fw-bold fs-4">
            <h4> <i class="fa-solid fa-magnifying-glass"></i> Consultar Chamado</h4>
          </div>


          <div class="card-body">

            <?php foreach ($chamados as $index => $chamado) { ?>

              <?php
              $chamado_dados = explode('#', $chamado);

              if ($_SESSION['perfil_id'] == 2) {
                //só exibe os chamados do usuário logado
                if ($_SESSION['id'] != $chamado_dados[0]) {
                  continue;
                }
              }

              if (count($chamado_dados) < 3) {
                continue;
              }
              ?>
              <div class="card mb-3 bg-light d-flex flex-row justify-content-between align-items-center p-3">
                <div>
                  <h5 class="card-title mb-1"><?= $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-1 text-muted"><?= $chamado_dados[2] ?></h6>
                  <p class="card-text mb-0"><?= $chamado_dados[3] ?></p>
                </div>

                <div class="d-flex flex-column align-items-end ms-3">

                  <!-- Botão Editar -->
                  <form method="POST" action="editar_chamado.php" class="mb-2">
                    <input type="hidden" name="indice" value="<?= $index ?>">
                    <button type="submit" class="btn btn-primary btn-sm">&nbsp;<i class="fa-solid fa-pen-to-square">&nbsp;</i></button>
                  </form>

                  <!-- Botão Deletar -->
                  <form method="POST" action="../controllers/excluir_chamado.php" onsubmit="return confirm('Deseja realmente excluir este chamado?')">
                    <input type="hidden" name="indice" value="<?= $index ?>">
                    <button type="submit" class="btn btn-danger btn-sm">&nbsp;<i class="fa-regular fa-trash-can">&nbsp;</i></button>
                  </form>

                </div>
              </div>

            <?php } ?>

            <div class="row mt-5">
              <div class="col-6">
                <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>