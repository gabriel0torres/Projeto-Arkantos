<?php
include 'session.php';
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="img/logo16x16.jpg">
    <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
    <!-- Bootstrap --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Inicial</title>
    
</head>
<body>

<!--CABEÇALHO -->
<header>
<div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid header">
                    <a href="inicio.php" class="navbar-brand"><img src="img/logo.jpg" style="width: 50px; height: 50px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" id="adicionar_usuario">Adicionar Usuário</a>
                    <a class="nav-link active" aria-current="page" id="listar_usuario">Listar Usuários</a>
                    <a class="nav-link" href="sair.php">Sair</a> 
                                      
                </div>
                </div>          
            </div>
            <div id="perfil">
                <p>Bem Vindo: <?php echo $_SESSION['usuario_nome'] ?></p>
            <div>
            
        </nav>
    </div>
    <header>

<!-- CONTEUDO PRINCIPAL -->
<main>

    <div id="conteudo" style="height: 74vh"></div>

</main>

<footer>
    <div class="container-fluid" id="rodape">
        <div>
            <h2 style="font-size:20px; color: black;">Projeto Arkantos</h2> <br>
            <p style="font-size:15px;">Developed by Gabriel Torres</p> <br>
            <p style="font-size:15px;">2023</p>
        <div>
    </div>
</footer>

<script src="scripts/inicio.js"></script>

<style>

    #rodape{

        display: flex;
        height:90px;
        background-color: gray; 
        text-align: center; 
        line-height: 1.5px;
        align-items: center;
        justify-content: center;
        color: white;

    }

    a{

        cursor: pointer;

    }

    </style>
    
</body>
 <!-- Bootstrap -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>