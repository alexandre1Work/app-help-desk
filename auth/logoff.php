<?php

session_start(); // inicia a sessão

session_destroy(); //destrói a sessão

header('Location: ../index.php'); //força o redirecionamento para este local