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
                    <a class="navbar-brand"><img src="logo.jpg" style="width: 50px; height: 50px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#" id="adicionar_usuario">Adicionar Usuário</a>
                    <a class="nav-link" href="sair.php">Sair</a>                   
                </div>
                </div>
            </div>
        </nav>
    </div>
    <header>

<!-- CONTEUDO PRINCIPAL -->
<main>

    <div id="conteudo" style="height: 100%"></div>

</main>

<script>

    const botao_adicionar_usuario = document.getElementById('adicionar_usuario');
    const container = document.getElementById('conteudo');

    botao_adicionar_usuario.addEventListener('click', function() {

        const iframe = document.createElement('iframe');
        iframe.src = 'inclui_registro.php'; 
        iframe.width = '100%'; 
        iframe.height = '100%'; 

        // Adicione o iframe ao container
        container.appendChild(iframe);
    });

</script>
    
</body>
 <!-- Bootstrap --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>