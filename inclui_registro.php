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

<main>
    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 1%">
   
        <div class="card p-4" style="width: 700px;">           
        <!-- <a href="inicio.php"><button class="btn btn-primary btn-block" id="btn_voltar">Voltar</button></a> -->
            <h2 class="text-center" style="font-size: x-large;">Adicionar Usuário</h2>           
            
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
                    <label for="data_nascimento">Data De Nascimento</label>
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                </div>

                <div class="form-group">
                    <label for="salario">Salário</label>
                    <input type="number" class="form-control" id="salario" name="salario" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>

            </form>
        </div>
    </div>

</main>

    <style>

body, html {
    /*height: 70%;*/
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
