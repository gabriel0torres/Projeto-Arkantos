<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="shortcut icon" type="imagex/png" href="img/logo16x16.jpg">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center h-100">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Faça o Login</h3>
                <form method="POST" action="validacao_login.php" onsubmit="return verifica_campos()">
                <div style="text-align: center;"><img src="img/logo.jpg" style="width: 110px"></div>
                    <div class="form-group">
                        <label for="username">Usuário</label>
                        <input name="login" type="text" class="form-control" id="login" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" style="background-color: orange; border-color: orange;">Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="scripts/index.js"></script>
<style>

    body, html {
    height: 100%;
}

.container {
    height: 100%;
    display: flex;
}

.card {
    width: 300px;
    margin: auto;
}

@media (max-width: 768px) {
    .card {
        width: 100%;
    }
}

</style>
</body>
</html>