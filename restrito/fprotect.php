<?php
session_start();
if(!isset($_SESSION['usuarioId']) and !isset($_SESSION['usuarioNome']) and !isset($_SESSION['usuarioEmail']) and!isset($_SESSION['usuarioSenha']) || !isset($_SESSION['usuarioNivel'])){
    header("Location: ../erro403.html");
    exit;
}


?>
