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
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- Bootstrap --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Inicial</title>
    
</head>
<body>

<div class="container-fluid">

    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                    <a class="navbar-brand" href="#">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link" href="#">Sair</a>
                </div>
                </div>
            </div>
        </nav>
    </div>
	<!-- <div class="row">
		<div class="col-md-8" id="botoes">			 
			<a href="inclui_registro.php"><button type="button" class="btn btn-success btn-md">INCLUIR REGISTRO</button></a>
		</div>

		<div class="col-md-4" id="nome">
            Bem vindo: <?php echo $_SESSION['usuario_nome']; ?>
		</div>

        

	</div>

    <div class="col-md-12">
            <button type="button" class="btn btn-success btn-md">LISTAR USUÁRIOS</button>
        </div>-->

</div>
    
</body>
 <!-- Bootstrap --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>