<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['username'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"../homepage/index.php\">Entrar</a></p>");
}


?>