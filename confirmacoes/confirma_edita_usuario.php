<?php

include '../session.php';
include '../connection.php';

try{
$id = $_POST['id'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$email = $_POST['email']; 
$data_nascimento = $_POST['data_nascimento'];
$salario = $_POST['salario'];   


$exec = mysqli_query($con,"UPDATE usuarios SET nome = '$nome',login = '$login',senha = '$senha',
cpf = '$cpf', email = '$email',data_nascimento = '$data_nascimento', salario = '$salario' where id = '$id'");

$result = mysqli_affected_rows($con);

      if($result == 1){

        echo "<script>alert('USUARIO ALTERADO COM SUCESSO');</script>";
        echo "<script>location.href='../edita_usuario.php?id=$id';</script>";

      }else{

        echo "<script>location.href='../edita_usuario.php?id=$id';</script>";
        
      }

    } catch(Exception $e){

        echo "<script>alert('NÃO FOI POSSÍVEL ALTERAR');</script>";
        echo "<script>location.href='../edita_usuario.php?id=$id';</script>";
    }

?>