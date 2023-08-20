<?php

// A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['usuario_id'])) {

      session_destroy(); 
      header("Location: index.php"); 
      exit;

  }

  ?>
