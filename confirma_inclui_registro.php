<?php

include 'session.php';
include 'connection.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];

function verifica_usuario($con){

    foreach ($_POST as $field => $value) {
        switch ($field) {
            case 'login':
            case 'cpf':
                $exec = mysqli_query($con,"SELECT $field from usuarios where $field = '$value'");
                if (mysqli_num_rows($exec) > 0){
                    
                    echo "<script>alert('Já existe um usuário com este $field"."')</script>";                                 
                    echo "<script>location.href='inclui_registro.php';</script>";
                    return true;

                }                
                break;              
        }
      }

      return false;

}

if(verifica_usuario($con)){
}else{

    $exec = mysqli_query($con,"INSERT INTO usuarios(nome,login,email,cpf,senha) values ('$nome','$login','$email','$cpf','$senha')");
    if ($exec) {
        echo "<script>alert('Usuário cadastrado com sucesso!')</script>";
        echo "<script>location.href='inclui_registro.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar o usuário: " . mysqli_error($con)."')</script>";
        echo "<script>location.href='inclui_registro.php';</script>";
    }
}
    

?>