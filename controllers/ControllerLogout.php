<?php

// Encerrando a Sessão

if(!isset($_SESSION)) {
    session_start();
}

session_unset();
session_destroy();

header('Location: ../views/manager/login.php');