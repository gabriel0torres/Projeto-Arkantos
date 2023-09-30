<?php

session_start(); //INICIA SESSÃO
session_unset();//LIMPA VARIÁVEIS DE SESSÃO
session_destroy(); //DESTRÓI SESSÃO
header("Location: index.php"); 
exit;

?>