<?php
require_once '../auth/validador_acesso.php';
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://kit.fontawesome.com/90a969b901.js" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="../assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="btn btn-outline-danger nav-link pl-3 pr-3" href="../auth/logoff.php"> SAIR <i class="fa-solid fa-right-from-bracket"></i> </a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-home">
        <div class="card">
          <div class="card-header fw-bold fs-4">
            <h4> <i class="fa-solid fa-house"></i> Menu </h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6 d-flex justify-content-center">
                <a href="abrir_chamado.php">
                  <img src="../assets/img/formulario_abrir_chamado.png" width="70" height="70">
                </a>
              </div>
              <div class="col-6 d-flex justify-content-center">
                <a href="consultar_chamado.php">
                  <img src="../assets/img/formulario_consultar_chamado.png" width="70" height="70">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>