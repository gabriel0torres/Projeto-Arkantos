<?php

include 'session.php';
include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<?php

$id = $_GET['id'];

$dados_usuarios = mysqli_query($con,"SELECT * FROM usuarios where ID = '$id'");
$rs = mysqli_fetch_assoc($dados_usuarios);

?>

<main>
    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 1%">
   
        <div class="card p-4" style="width: 700px;">           
        <a href="lista_usuarios.php"><button class="btn btn-primary btn-block" id="btn_voltar">Voltar</button></a> <br>
            <h2 class="text-center" style="font-size: x-large;">Alterar Dados</h2>           
            
                <form action="confirmacoes/confirma_edita_usuario.php" method="post">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $rs['ID']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $rs['nome']?>">
                </div>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" name="login" value="<?php echo $rs['login']?>">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="text" class="form-control" id="senha" name="senha" value="<?php echo $rs['senha']?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $rs['email']?>">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="number" class="form-control" id="cpf" name="cpf" value="<?php echo $rs['cpf']?>">
                </div>

                <div class="form-group">
                    <label for="data_nascimento">Data De Nascimento</label>
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo $rs['data_nascimento']?>">
                </div>

                <div class="form-group">
                    <label for="salario">Salário</label>
                    <input type="number" class="form-control" id="salario" name="salario" value="<?php echo $rs['salario']?>">
                </div>

                <button type="submit" class="btn btn-lg btn-success" style="width: 100%">ALTERAR <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                    </svg>
                </button> 

            </form>
        </div>     
    </div>

</main>

    <style>

        .card input{

            width:100%;
        }
    </style>
    
</body>
</html>