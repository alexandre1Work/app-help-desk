<?php
require_once '../auth/validador_acesso.php';

if (!isset($_GET['msg']) || $_GET['msg'] !== 'abrir1') {
    header('Location: home.php'); 
    exit;
}

?>

<!DOCTYPE html>
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
        <a class="navbar-brand" href="#">
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

            <div class="card-home">
                <div class="card">
                        <div class="card-header bg-success text-white col-12 d-flex justify-content-center">
                            <h3> <i class="fa-regular fa-circle-check"></i> Chamado cadastrado com sucesso!</h3> 
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-3 d-flex justify-content-center mx-auto">
                                <a class="btn btn-lg btn-info btn-block" href="home.php">Home</a>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>