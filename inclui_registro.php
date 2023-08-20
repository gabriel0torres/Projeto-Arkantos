<?php

include 'session.php';
include 'connection.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Incluir Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<script>

function verifica_senha(){

    const senha = document.getElementById("senha").value
    const confirma_senha = document.getElementById("confirmaSenha").value

    if(senha !== confirma_senha){

        alert("As senhas precisam ser iguais !")
        return false

    }else{

        return true
    }
}

</script>
<body>
    <div class="container d-flex justify-content-center align-items-center">
   
        <div class="card p-4">           
        <a href="inicio.php"><button class="btn btn-primary btn-block" id="btn_voltar">Voltar</button></a>
            <h2 class="text-center">Formulário de Cadastro</h2>           
            <form action="confirma_inclui_registro.php" method="post" onsubmit="return verifica_senha()">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="number" class="form-control" id="cpf" name="cpf" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <div class="form-group">
                    <label for="confirmaSenha">Confirme a Senha</label>
                    <input type="password" class="form-control" id="confirmaSenha" name="confirma_senha" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </form>
        </div>
    </div>

    <style>

body, html {
    height: 100%;
}

.container {
    height: 100%;
    display: flex;
}

.card {
    width: 400px;
    margin: auto;
}

#btn_voltar{
    width: 50%;
}

a{
    text-align: -webkit-center;
}

    </style>
</body>
</html>
