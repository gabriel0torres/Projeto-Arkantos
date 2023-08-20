<?php

include 'connection.php';

$login = $_POST['login'];
$password = $_POST['password'];

$result = mysqli_query($con,"SELECT id, nome, login, senha FROM usuarios WHERE login = '$login' and senha = '$password'");

if(mysqli_num_rows($result) > 0){

    $conteudo = mysqli_fetch_assoc($result);

    //Salvando sessão//
    if (!isset($_SESSION)) session_start();

    $_SESSION['usuario_id'] = $conteudo['id'];
    $_SESSION['usuario_login'] = $conteudo['login'];
    $_SESSION['usuario_nome'] = $conteudo['nome'];

    echo "<script>location.href='inicio.php'</script>";

}else{

    echo "<script>alert('Dados informados estão invalidos.')</script>";
    echo "<script>location.href='index.php'</script>";

}

  ?>